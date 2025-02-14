<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;


class MediaController extends Controller
{
    public function uploadBlueprint(Transaction $transaction, Request $request)
    {



       $request->validate([
           'file'=>['required', File::types(['dwg', 'DWG'])->max(5000000)]
        ]);


        if(!$request->hasFile('file')){
            abort(403, 'No se esta recibiendo el archivo');
        }

        $transaction->addMedia($request->file('file'))->toMediaCollection('blueprint');

        $transaction->transaction_status_id = 2;
        $transaction->save();

        return response()->json(['ok'=>true, 'message'=>'Archivo Cargado con éxito.']);
    }
}
