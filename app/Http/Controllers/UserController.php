<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->with('agent', 'notary');
        $users = $users->get();
        return new UserCollection($users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required  ',
            'phone' => 'required',
            'address' => 'required',
            'cargo' => 'required',
            'role_id' => 'required',
            'agent_id' => 'nullable | numeric',
            'notary_id' => 'nullable | numeric'
        ]);


        if(User::where('email', $request->get('email'))->count()){
            abort(400, 'Ya existe un usuario con este email.');
        }

        if($request->role_id == 1){
            $request->role_id = 2;
        }

        $user =User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('email')),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'cargo' => $request->get('cargo'),
            'role_id' => $request->role_id,
            'agent_id' => 'nullable | numeric',
            'notary_id' => 'nullable | numeric'
        ]);

        if($request->get('agent_id')){
            $user->notary_id = $request->get('agent_id');
        }
        if($request->get('notary_id')){
            $user->notary_id = $request->get('notary_id');
        }

        $user->is_active = true;
        $user->save();



        Mail::raw('Bienvenido a la plataforma Catastro App, puedes hacer login por primera vez usando el email como contraseña', function (Message $message) use ($user) {
            $message->to($user->email)->from('catastro@catastro.com', 'Catastro')->subject('Bienvenido a Catastro App');
        });

        return response()->json(['ok'=>true, 'message'=>'User created successfully'], 200);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required  ',
            'phone' => 'required',
            'address' => 'required',
            'cargo' => 'required',
            'role_id' => 'required'
        ]);

       if($request->role_id == 1){
            $request->role_id = 2;
       }

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->cargo = $request->get('cargo');
        $user->role_id = $request->get('role_id');

        $user->save();

        return response()->json(['ok'=>true, 'message'=>'Usuaro actualizado con exito'], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['ok'=>true, 'message'=>'Usuaro eliminado con exito'], 200);
    }
}
