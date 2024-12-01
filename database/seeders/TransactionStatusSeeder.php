<?php

namespace Database\Seeders;

use App\Models\TransactionStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TransactionStatus::create(['name'=>'Iniciado-Sin plano en la plataforma', 'color'=>'#f1df7a']);
        TransactionStatus::create(['name'=>'Recibido en la plataforma', 'color'=>'#EBC809']);
        TransactionStatus::create(['name'=>'En revisión', 'color'=>'#EBC809']);
        TransactionStatus::create(['name'=>'Rechazdo', 'color'=>'#EB342F']);
        TransactionStatus::create(['name'=>'Aceptado-Listo para entrega', 'color'=>'#5BEB79']);
        TransactionStatus::create(['name'=>'Entregado', 'color'=>'#07EB1D']);
    }
}
