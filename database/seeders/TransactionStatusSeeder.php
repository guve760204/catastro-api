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
        TransactionStatus::create(['name'=>'Inicio-registrado en la plataforma', 'color'=>'#BAE8C2']);
        TransactionStatus::create(['name'=>'Recibido en la plataforma', 'color'=>'#EBC809']);
        TransactionStatus::create(['name'=>'En trámite', 'color'=>'#EBC809']);
        TransactionStatus::create(['name'=>'Rechazdo', 'color'=>'#EB342F']);
        TransactionStatus::create(['name'=>'Listo para entrega', 'color'=>'#5BEB79']);
        TransactionStatus::create(['name'=>'Entregado', 'color'=>'#07EB1D']);
    }
}
