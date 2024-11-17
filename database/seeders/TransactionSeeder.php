<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'uuid'=>Str::uuid()->toString(),
            'user_id'=>1,
            'transaction_type_id'=>1,
            'notary_id'=>1,
            'agent_id'=>1,
            'transaction_status_id'=>1,
            'description'=>'Prueba de trámite',
            'register_date'=>now(),
            'end_date'=>now()->addDay(5),
            'accepted_at'=>now()->addDay(1),
            'name'=>'Eduardo Guzmán Venegas',
            'phone'=>'4286874173',
            'email'=>'reapel@hotmail.com',
            'address'=>'Monteverde 101'
        ]);
    }
}
