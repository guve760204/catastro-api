<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Transaction_rejection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TransactionRejectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Transaction $transaction)
    {
        $request->validate([
           'rejections' => 'required | array',
            'rejections.*.transaction_rejection_type_id' => 'required',
            'rejections.*.description' => 'nullable | string',
        ]);

        $rejections = $request->get('rejections');
        $user_id = Auth::user()->id;

        foreach ($rejections as $rejection) {
            Transaction_rejection::create(['transaction_rejection_type_id'=>$rejection['transaction_rejection_type_id'], 'desctiption'=>$rejection['description'], 'user_id'=>$user_id, 'transaction_id'=>$transaction->id]);
        }

        $transaction->rejected_at = now();
        $transaction->transaction_status_id = 4;
        $transaction->accepted_at = null;
        $transaction->save();

        return response()->json(['ok'=>true, 'msg'=>'Rechazos agregados correctamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction_rejection $transaction_rejection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaction_rejectionRequest $request, Transaction_rejection $transaction_rejection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction_rejection $transaction_rejection)
    {
        //
    }
}
