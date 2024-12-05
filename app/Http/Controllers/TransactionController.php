<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionCollection;
use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $request->validate([
            'from'=>'nullable|date',
            'to'=>'nullable|date',
            'user_id'=>'nullable|integer',
        ]);

        $user = Auth::user();

        $transactions = Transaction::query()->with('notary', 'agent');
        if($request->get('my_transactions')){
            $transactions = $transactions->whereHas('agent', function ($transaction) use ($user) {
                return $transaction->where('agent_id', $user->agent_id);
            });
        }

        if($request->get('from') && $request->get('to')) {
            $from = Carbon::parse($request->get('from'));
            $to = Carbon::parse($request->get('to'));
            $transactions = $transactions->whereBetween('created_at', [$from, $to]);
        }

        if($request->get('user_id') ){
            $transactions = $transactions->where('user_id', $request->get('user_id'));
        }

        $transactions = $transactions->latest()->get();
        return new TransactionCollection($transactions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'transaction_type_id'=>'required|integer',
            'notary_id'=>'nullable|integer',
            'agent_id'=>'nullable|integer',
            'costumer_id'=>'nullable|integer',
            'description'=>'nullable|string',
            'location'=>'required|string',
            'name'=>'required|string',
            'phone'=>'nullable|string',
            'address'=>'nullable|string',
            'email'=>'nullable|string',
        ]);


        $user = Auth::user();

        if(!$user->role_id == 4 || !$user->role_id == 5){
            abort(403, 'Solo los peritos autorizados pueden dar de alta este trámite');
        }

        $transaction = Transaction::create([
            'transaction_type_id' =>$request->transaction_type_id,
            'costumer_id' =>$request->costumer_id,
            'description' =>$request->description,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'location'=>$request->location,
            'address'=>$request->address,
            'email'=>$request->email,
            'lat'=>$request->lat,
            'lng'=>$request->lng,
        ]);

        $transaction->uuid = $this->randomString(6, $transaction->id);
        $transaction->agent_id = $user->agent_id? $user->agent_id : null;
        $transaction->register_date = now();
        $transaction->user_id = $user->id;
        $transaction->transaction_status_id= 1;
        $transaction->save();

        return new TransactionResource($transaction);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        $id=$transaction->id;
        $transaction = Transaction::query()->with('notary', 'agent', 'costumer');

        $transaction = $transaction->findOrFail($id);

       return new TransactionResource($transaction);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'transaction_type_id'=>'required|integer',
            'description'=>'nullable|string',
            'name'=>'required|string',
            'phone'=>'required|string',
            'address'=>'nullable|string',
            'email'=>'nullable|string',
            'location'=>'nullable|string',
        ]);

        $transaction->transaction_type_id = $request->transaction_type_id;
        $transaction->description = $request->description;
        $transaction->name = $request->name;
        $transaction->phone = $request->phone;
        $transaction->email = $request->email;
        $transaction->address = $request->address;
        $transaction->location = $request->location;


        $transaction->save();

        return response()->json(['ok'=>true, 'message' => 'Transaction updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return response()->json(['ok'=>true, 'message' => 'El trámite se ha eliminado con éxito']);
    }

    public function randomString($length = 6, $transaction_id) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length/2; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        $numbers = '0123456789';
        $numbersLength = strlen($numbers);
        $randomNumber = '';

        for ($i = 0; $i < $length/2; $i++) {
            $randomNumber .= $numbers[random_int(0, $numbersLength - 1)];
        }

        return now()->year.'-ID'.$transaction_id.'-'.$randomString.'-'.$randomNumber;
    }

    public function setAttendant(Transaction $transaction){
        $user = Auth::user();

        $transaction->attendant_id = $user->id;
        $transaction->transaction_status_id = 3;
        $transaction->save();

        return response()->json(['ok'=>true, 'message'=>'Se ha asignado con éxito al supervisor del trámite']);
    }

    public function acceptTransaction(Transaction $transaction)
    {
        $transaction->transaction_status_id = 5;
        $transaction->accepted_at = now();
        $transaction->rejected_at = null;
        $transaction->processed_at = now();
        $transaction->save();

        return response()->json(['ok'=>true, 'message'=>'Se ha aprobado el trámite']);
    }

    public function rejectTransaction(Transaction $transaction)
    {
        $transaction->transaction_status_id = 4;
        $transaction->rejected_at = now();
        $transaction->save();

        return response()->json(['ok'=>true, 'message'=>'Se ha rechazado el trámite']);
    }
    public function deliverTransaction(Transaction $transaction)
    {
        $transaction->transaction_status_id = 6;
        $transaction->end_date = now();
        $transaction->save();

        return response()->json(['ok'=>true, 'message'=>'Se ha marcado el trámite como entregado y finalizado']);
    }

}
