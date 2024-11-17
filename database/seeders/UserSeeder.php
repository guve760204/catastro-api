<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(['name'=>'Guzmán Venegas Eduardo', 'email'=>'reapel@hotmail.com', 'password'=>Hash::make('password')]);
        $user->role_id = 1;

        $user->save();
    }
}
