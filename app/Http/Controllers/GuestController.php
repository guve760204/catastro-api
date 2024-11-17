<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Notary;
use App\Models\Transaction;
use App\Models\TransactionType;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function landingPageInfo(){
       $local_notaries = Notary::where('is_local', true)->where('is_active', true)->get();
       $foreign_notaries = Notary::where('is_local', false)->where('is_active', true)->get();
       $agents = Agent::where('is_active', true)->get();
       $transaction_types = TransactionType::all();

       $transactions = Transaction::all()->groupBy('agent_id');

       //return $transactions;
       return response()->json(['local_notaries' => $local_notaries, 'foreign_notaries'=>$foreign_notaries, 'agents' => $agents, 'transaction_types' => $transaction_types]);
    }

}
