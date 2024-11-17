<?php

namespace Database\Seeders;

use App\Models\Costumer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CostumerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $costumer = Costumer::create(['name'=>'Eduardo Guzmán Venegas', 'phone'=>'4286874173', 'email'=>'reapel@hotmail.com', 'address'=>'Monteverde 101']);

    }
}
