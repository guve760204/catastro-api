<?php

namespace Database\Seeders;

use App\Models\TransactionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TransactionType::create(['code'=>'AC', 'name'=>'ALTA POR CORRECCIÓN', 'type'=>"APERTURA"]);
        TransactionType::create(['code'=>'ACC', 'name'=>'TRAMITACION DE CONSTANCIA', 'type'=>"VALUACIÓN"]);
        TransactionType::create(['code'=>'ACI', 'name'=>'AVALUO POR INCONFORMIDAD', 'type'=>"VALUACIÓN"]);
        TransactionType::create(['code'=>'ACT', 'name'=>'AVALUO TRASLACION DOMINIO', 'type'=>"VALUACIÓN"]);
        TransactionType::create(['code'=>'ACV', 'name'=>'AVALUO CATASTRAL VENCIDO', 'type'=>"VALUACIÓN"]);
        TransactionType::create(['code'=>'ADM', 'name'=>'ALTA DIVISION MANCOMUNIDAD', 'type'=>"APERTURA"]);
        TransactionType::create(['code'=>'ADP', 'name'=>'ALTA DERECHOS DE POSESIÓN', 'type'=>"APERTURA"]);
        TransactionType::create(['code'=>'ADR', 'name'=>'ALTA DER. REALES HEREDITARIOS', 'type'=>"APERTURA"]);
        TransactionType::create(['code'=>'AF', 'name'=>'FUSIÓN', 'type'=>"APERTURA"]);
        TransactionType::create(['code'=>'AIT', 'name'=>'ALTA INFORMACIÓN TESTAMENTARIA', 'type'=>"APERTURA"]);
        TransactionType::create(['code'=>'AO', 'name'=>'ALTA DE OCULTACIÓN', 'type'=>"APERTURA"]);
        TransactionType::create(['code'=>'AP', 'name'=>'ALTA POR POSESIÓN', 'type'=>"APERTURA"]);
        TransactionType::create(['code'=>'AS', 'name'=>'APORTACIÓN SOCIEDAD', 'type'=>"TRASLADO"]);
        TransactionType::create(['code'=>'ASU', 'name'=>'ALTA POR SUCESIÓN', 'type'=>"APERTURA"]);
        TransactionType::create(['code'=>'B', 'name'=>'BAJA TOTAL', 'type'=>"BAJA"]);
        TransactionType::create(['code'=>'BA', 'name'=>'AFECTACIÓN TOTAL', 'type'=>"BAJA"]);
        TransactionType::create(['code'=>'BC', 'name'=>'BAJA POR CORRECCIÓN', 'type'=>"BAJA"]);
        TransactionType::create(['code'=>'BF', 'name'=>'BAJA POR FUSIÓN', 'type'=>"BAJA"]);
        TransactionType::create(['code'=>'CF', 'name'=>'COMPRA DE FRACCIÓN', 'type'=>"APERTURA"]);
        TransactionType::create(['code'=>'CON', 'name'=>'CONSULTA DE LIBRO', 'type'=>"APERTURA"]);
        TransactionType::create(['code'=>'CV', 'name'=>'VENTA TOTAL', 'type'=>"TRASLADO"]);
        TransactionType::create(['code'=>'DM', 'name'=>'DIVISIÓN MANCOMUNIDAD', 'type'=>"TRASLADO"]);
        TransactionType::create(['code'=>'DP', 'name'=>'VENTA DERECHOS POSESORIOS', 'type'=>"TRASLADO"]);
        TransactionType::create(['code'=>'DRH', 'name'=>'DERECHOS REALES HEREDITARIOS', 'type'=>"TRASLADO"]);
        TransactionType::create(['code'=>'EX', 'name'=>'EXCENSIÓN', 'type'=>"EXENCIÓN"]);
        TransactionType::create(['code'=>'FM', 'name'=>'FORMACIÓN MANCOMUNIDAD', 'type'=>"TRASLADO"]);
        TransactionType::create(['code'=>'FU', 'name'=>'FUSIÓN', 'type'=>"TRASLADO"]);
        TransactionType::create(['code'=>'ISP', 'name'=>'SOLICITUD DE INTERES SOCIAL 70%', 'type'=>"CORRECCIÓN"]);
        TransactionType::create(['code'=>'IT', 'name'=>'INFORMACIÓN TESTIMONIAL', 'type'=>'TRASLADO']);
        TransactionType::create(['code'=>'MD', 'name'=>'MODIFICAR DATOS', 'type'=>'CORRECCIÓN']);
        TransactionType::create(['code'=>'PR', 'name'=>'CORRECCIÓN SIN NOTA', 'type'=>'CORRECCIÓN']);
        TransactionType::create(['code'=>'PV', 'name'=>'PROMESA DE VENTA', 'type'=>'APERTURA']);
        TransactionType::create(['code'=>'RH', 'name'=>'VENTA DERECHOS REALES HEREDITARIOS', 'type'=>'TRASLADO']);
        TransactionType::create(['code'=>'RP', 'name'=>'RECTIFICA PADRÓN', 'type'=>'CORRECCIÓN']);
        TransactionType::create(['code'=>'SIS', 'name'=>'CASAS DE INTERES SOCIAL', 'type'=>'CORRECCIÓN']);
        TransactionType::create(['code'=>'SJP', 'name'=>'SOLCITUD JUBILADOS Y PENSIONADOS', 'type'=>'CORRECCIÓN']);
        TransactionType::create(['code'=>'SU', 'name'=>'ADJUDICACION POR SUCESIÓN', 'type'=>'TRASLADO']);
        TransactionType::create(['code'=>'UF', 'name'=>'CORRECCIÓN AL NOMBRE', 'type'=>'CORRECCIÓN']);
        TransactionType::create(['code'=>'VE', 'name'=>'VALOR ESTIMADO', 'type'=>'VALUACIÓN']);
        TransactionType::create(['code'=>'VF', 'name'=>'VENTA DE FRACCIÓN', 'type'=>'TRASLADO']);
    }
}
