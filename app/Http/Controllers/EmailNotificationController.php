<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class EmailNotificationController extends Controller
{
    public function notifyAllAgents(Request $request)
    {
        $request->validate([
           'message' => 'required | string',
           'subject' => 'required | string',
        ]);

        $message = $request->get('message', 'Gracias por usar nuestra plataforma!');
        $subject = $request->get('subject', 'Mensaje automático del sistema');

        $users = Agent::all();

        $users->each(function ($user) use($message, $subject) {
            Mail::raw('Bienvenido a la plataforma Catastro App, '.$message, function (Message $message) use ($user, $subject) {
                $message->to($user->email)->from('catastro@catastro.com', 'Catastro')->subject($subject);
            });
        });

        return response()->json(['ok'=>true, 'message' => 'Email enviado con éxito' ]);
    }

    public function notifyEmail(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'message' => 'required | string',
            'subject' => 'required | string',
        ]);

        $email = $request->get('email');

        if(!$email){
            abort(403, 'El destinatario no tiene un email registrado');
        }


        $message = $request->get('message', 'Gracias por usar nuestra plataforma!');
        $subject = $request->get('subject', 'Mensaje automático del sistema');

        Mail::raw('Bienvenido a la plataforma Catastro App, '.$message, function (Message $message) use ($email, $subject) {
            $message->to($email)->from('catastro@catastro.com', 'Catastro')->subject($subject);
        });

        return response()->json(['ok'=>true, 'message' => 'Email enviado con éxito' ]);
    }
}
