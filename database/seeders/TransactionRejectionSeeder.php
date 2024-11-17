<?php

namespace Database\Seeders;

use App\Models\Transaction_rejection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionRejectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction_rejection::create(['transaction_id' => 1, 'user_id' => 1, 'transaction_rejection_type_id' => 3, 'description'=>'Rechazo de prueba 1']);
        Transaction_rejection::create(['transaction_id' => 1, 'user_id' => 1, 'transaction_rejection_type_id' => 3, 'description'=>'Segundo Rechazo de prueba 1']);
    }
}
