<?php

namespace Database\Seeders;

use App\Models\Transaction_rejection_type;
use Illuminate\Database\Seeder;

class TransactionRejectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //TRASLACION DE DOMINIO
        Transaction_rejection_type::create(['name'=>'FALTA PERMISO DE DIVISIÓN', 'type'=>'TRASLACION DE DOMINIO']);
        Transaction_rejection_type::create(['name'=>'AVALUO VENCIDO', 'type'=>'TRASLACION DE DOMINIO']);
        Transaction_rejection_type::create(['name'=>'ERROR EN LA SUPERFICIE', 'type'=>'TRASLACION DE DOMINIO']);
        Transaction_rejection_type::create(['name'=>'ERROR EN LAS COLINDANCIAS', 'type'=>'TRASLACION DE DOMINIO']);
        Transaction_rejection_type::create(['name'=>'ERROR EN FECHA Y/O NUMERO DE ESCRITURA', 'type'=>'TRASLACIÒN DE DOMINIO']);
        Transaction_rejection_type::create(['name'=>'DOMICILIO INCOMPLETO', 'type'=>'TRASLACION DE DOMINIO']);
        Transaction_rejection_type::create(['name'=>'FALTA DEL TITULO DE PROPIEDAD DE LOS PREDIOS EJIDALES', 'type'=>'TRASLACIÒN DE DOMINIO']);
        Transaction_rejection_type::create(['name'=>'FALTA DE COPIAS DE LOS TESTIMONIOS', 'type'=>'TRASLACIÒN DE DOMINIO']);
        Transaction_rejection_type::create(['name'=>'FALTA DE LAS DECLARATTORIAS DE LOS HEREDEROS', 'type'=>'TRASLACIÒN DE DOMINIO']);
        Transaction_rejection_type::create(['name'=>'FALTA DE LAS SENTENCIAS DE ADJUDICACIÓN', 'type'=>'TRASLACIÒN DE DOMINIO']);
        Transaction_rejection_type::create(['name'=>'OTRO -SE ESPECIFICA-', 'type'=>'TRASLACIÒN DE DOMINIO']);

        //AVALUO CATASTRAL
        Transaction_rejection_type::create(['name'=>'ERROR EN LOS DATOS DE LA CUENTA PREDIAL (UBICACION, MEDIDAS, ORIENTACION, COLINDANCIAS, VALOR, ETC.)', 'type'=>'AVALUO CATASTRAL']);
        Transaction_rejection_type::create(['name'=>'FALTA DE DOCUMENTACION ANEXA PARA RESPALDAR LA AUTORIZACIÓN', 'type'=>'AVALUO CATASTRAL']);
        Transaction_rejection_type::create(['name'=>'NO SE RECIBIO EL PLANO DEL AVALUO EN FORMATO DIGITAL', 'type'=>'AVALUO CATASTRAL']);
        Transaction_rejection_type::create(['name'=>'PLANO SIN CUADRO DE CONSTRUCCIÓN CON COORDENADAS UTM Y GEOREFERENCIADO', 'type'=>'AVALUO CATASTRAL']);
        Transaction_rejection_type::create(['name'=>'OTRO -SE ESPECIFICA-', 'type'=>'AVALUO CATASTRAL']);

        //CLAVE CATASTRAL
        Transaction_rejection_type::create(['name'=>'SOLICITUD NO FIRMADA POR EL CONTRIBUYENTE', 'type'=>'CLAVE CATASTRAL']);
        Transaction_rejection_type::create(['name'=>'PREDIAL CON ADEUDO', 'type'=>'CLAVE CATASTRAL']);
        Transaction_rejection_type::create(['name'=>'FALTA DE ANEXOS (COPIA INE, COPIA DE RECIBO DE PREDIAL PAGADO, PODER NOTARIAL EN SU CASO, ETC.)', 'type'=>'CLAVE CATASTRAL']);
        Transaction_rejection_type::create(['name'=>'SOLICITUD DE PREDIO NO REGISTRADO', 'type'=>'CLAVE CATASTRAL']);
        Transaction_rejection_type::create(['name'=>'OTRO -SE ESPECIFICA-', 'type'=>'CLAVE CATASTRAL']);


    }
}
