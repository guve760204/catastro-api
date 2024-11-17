<?php

namespace Database\Seeders;

use App\Models\Agent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Agent::create(['name' => 'AQR. MANUEL FCO. CENTENO ZUÑIGA', 'address' => 'CALZADA DE SAN MIGUEL #200, CENTRO, SAN FELIPE GTO.', 'phone' => '4286852899', 'email' => 'arq_centeno@yahoo.com', 'is_local'=>1]);
        Agent::create(['name' => 'ING SAUL JUÁREZ BARRIENTOS', 'address' => 'CALZADA DE SAN MIGUEL #104, CENTRO, SAN FELIPE GTO.', 'phone' => '4286851626', 'email' => 'hechospara_medir@hotmail.com', 'is_local'=>1]);
        Agent::create(['name' => 'ING LUIS SOTO CUELLAR', 'address' => 'COLÓN 810, CENTRO, SAN FELIPE GTO.', 'phone' => '4286852300', 'email' => 'cusoma54@hotmail.com', 'is_local'=>1]);
        Agent::create(['name' => 'ING. JOSÉ FELIX CÁRDENAS YEPEZ', 'address' => 'PINO SUÁREZ #226-A, CENTRO, SAN FELIPE', 'phone' => '4286851500', 'email' => 'cardeye_@hotmail.com', 'is_local'=>1]);
        Agent::create(['name' => 'ING JAVIER JÚAREZ BARRIENTOS', 'address' => 'CALZADA DE SAN MIGUEL #104, CENTRO, SAN FELIPE GTO.', 'phone' => '4286851626', 'email' => 'hechospara_medir2@hotmail.com', 'is_local'=>1]);
        Agent::create(['name' => 'ING. ERICK DAVID CENTENO HERNÁNDEZ', 'address' => '16 DE SEPTIEMBRE # 410, CENTRO, SAN FELIPE GTO.', 'phone' => '4286851316', 'email' => 'despacho.centeno@hotmail.com', 'is_local'=>1]);
        Agent::create(['name' => 'ING. SALVADOR TORRES CAMARILLO', 'address' => 'PROFESORES #318, CENTRO, SAN FELIPE GTO.', 'phone' => '4286850365', 'email' => 'storrescama@hotmail.com', 'is_local'=>1]);
        Agent::create(['name' => 'ING. DIANA BERENICE SOTO MANZANO', 'address' => 'COLON #810, CENTRO, SAN FELIPE GTO.', 'phone' => '4286852300', 'email' => 'dsoto.m@hotmail.com', 'is_local'=>1]);
        Agent::create(['name' => 'ING ROGELIO MÉNDEZ IBARRA', 'address' => 'CIRCUITO TAPAMU #133, FRACCIONAMIENTO DEL BOSQUE, SAN FELIPE GTO.', 'phone' => '4281125062', 'email' => 'cicrom.rogelio@gmail.com', 'is_local'=>1]);
        Agent::create(['name' => 'ING. SAUL CENTENO HERNÁNDEZ', 'address' => '16 DE SEPTIEMBRE #410, ZONA CENTRO, SAN FELIPE GTO.', 'phone' => '4286851316', 'email' => 'cehs.geomatica@hotmail.com', 'is_local'=>1]);
        Agent::create(['name' => 'ING. JOÉL NARVÁEZ JUÁREZ', 'address' => 'AMBAR #106, COL LA JOYA, SAN FELIPE GTO.', 'phone' => '477327063', 'email' => 'joelnarvaezj@hotmail.com', 'is_local'=>1]);
        Agent::create(['name' => 'ING. ARQ. JOSÉ GUADALUPE PÉREZ', 'address' => 'PROFESORES #328, INT 3, CENTRO, SAN FELIPE GTO.', 'phone' => '4281039545', 'email' => 'josegpe.rp24@live.com', 'is_local'=>1]);
        Agent::create(['name' => 'ING. EDUARDO PARDO BIGURRA', 'address' => 'HUERTA DE SAN JUAN #205, FRACC. HUERTAS DE SAN AGUSTÍN, SAN FELIPE GTO.', 'phone' => '3121536634', 'email' => 'epbigurra@gmail.com', 'is_local'=>1]);
        Agent::create(['name' => 'ARQ. EDGAR JONATHAN ALMANZA MÉNDEZ', 'address' => 'CALLE 8 # 101, FRACC. DOCTOR HÉRNANDEZ ÁLVAREZ', 'phone' => '4286850212', 'email' => 'arqedgarj@gmail.com', 'is_local'=>1]);
        Agent::create(['name' => 'ING. JOSÉ SAMUEL CHRISTIAN ORTA ORTEGA', 'address' => 'RUBEN DARIO # 109-A, CENTRO, SAN FELIPE GTO.', 'phone' => '4281142355', 'email' => 'jsc.orta-ic@hotmail.com', 'is_local'=>1]);
    }
}
