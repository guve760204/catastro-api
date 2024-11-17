<?php

namespace Database\Seeders;

use App\Models\Notary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notary::create(['name'=>'Lic. Gerardo Gonzalez Tellez', 'number'=>6, 'location'=>'Dolores Hidalgo', 'email'=>'', 'phone'=>'(418) 182-1408', 'address'=>'Oaxaca No. 1', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Isidro Ignacio de la Peña Hernandez', 'number'=>2, 'location'=>'Guanajuato', 'email'=>'', 'phone'=>'(473) 731-1066', 'address'=>'Paseo de la Presa No. 81', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Nora Concepcion Gutierrez Mena', 'number'=>18, 'location'=>'Guanajuato', 'email'=>'', 'phone'=>'(473) 732-8201', 'address'=>'Agora del Baratillo Desp. 15', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Luis Monen Stefano', 'number'=>6, 'location'=>'León', 'email'=>'', 'phone'=>'(477)14-2505', 'address'=>'Madero No. 219-211 Cond. Madero', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Jesus Luis Vega Zepeda', 'number'=>8, 'location'=>'León', 'email'=>'', 'phone'=>'(477) 773-5298', 'address'=>'Dique No. 425-3, Jardines del Moral', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Ignacio Frayre Garza', 'number'=>13, 'location'=>'León', 'email'=>'', 'phone'=>'(477) 714- 6336', 'address'=>'Madero No. Desp. 101, Planta Baja', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Jesus Cesar Navarro del Muro Amador', 'number'=>15, 'location'=>'León', 'email'=>'', 'phone'=>'(477) 714-1347', 'address'=>'Av. Paseo del Moral 315, Jardines del Moral', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Rafael Aranda Villalobos', 'number'=>17, 'location'=>'León', 'email'=>'', 'phone'=>'(477)718-5581', 'address'=>'Purisima No. 504, Moderna Parque Hidalgo', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Jose Antonio Junquera Pons', 'number'=>18, 'location'=>'León', 'email'=>'', 'phone'=>'(477) 718-6300', 'address'=>'Faralion No. 226 Esq. Agua Azul, Jardines del Moral', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Jose Lomeli Rangel', 'number'=>19, 'location'=>'León', 'email'=>'', 'phone'=>'(477) 716-9127', 'address'=>'Venecia No. 325-A (Glorieta), Andrade', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Alfonso Ernesto Fragoso Gutierrez', 'number'=>21, 'location'=>'León', 'email'=>'', 'phone'=>'(477) 717-7409', 'address'=>'Paseo de los Insurgentes No. 508 2o Piso, Jardines del Moral', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Luis Ignacio Vazquez Hernandez', 'number'=>22, 'location'=>'León', 'email'=>'', 'phone'=>'(477)713-3028', 'address'=>'Calle 5 Febrero No. 101 Int. 111, Centro', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Afonso Gutierrez Porton', 'number'=>25, 'location'=>'León', 'email'=>'', 'phone'=>'(477)713 54-58', 'address'=>'Madero Num. 320-9, Centro', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Jose Antonio Garcia Retana', 'number'=>28, 'location'=>'León', 'email'=>'', 'phone'=>'(477)77-2984', 'address'=>'Esq. Con Calle Manuel de Austria, San Juan Bosco', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Eugenio Chico Gonzalez', 'number'=>29, 'location'=>'León', 'email'=>'', 'phone'=>'(477)763-2963', 'address'=>'Prol. Calzada No. 106, La Martinica', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Jose Francisco Fernandez Regalado', 'number'=>32, 'location'=>'León', 'email'=>'', 'phone'=>'(477)716-0700', 'address'=>'20 de Enero No. 322 Planta Baja, Centro', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Luis Ernesto Aranda Villalobos', 'number'=>41, 'location'=>'León', 'email'=>'', 'phone'=>'(477)718-5581', 'address'=>'Purisima No. 504, Moderna', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Alejandro Duran Llamas', 'number'=>44, 'location'=>'León', 'email'=>'', 'phone'=>'(477)7132793', 'address'=>'Pedro Moreno No. 108, Centro', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Jose Antonio Zavala Arias', 'number'=>45, 'location'=>'León', 'email'=>'', 'phone'=>'(477)718-6857', 'address'=>'Laja No. 126, Jardines del Moral', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Alfonso Duran Llamas', 'number'=>48, 'location'=>'León', 'email'=>'', 'phone'=>'(477)713-4476', 'address'=>'Juan de Orozco 154, edif. Montes de Oca Desp. 101, Centro', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Jesus Luis Zepeda Vega', 'number'=>63, 'location'=>'León', 'email'=>'', 'phone'=>'(477)716-6352', 'address'=>'Madero No. 219, Cond. Madero Interior 407, Centro', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Pablo Francisco Toriello Arce', 'number'=>65, 'location'=>'León', 'email'=>'', 'phone'=>'(477)470-7100', 'address'=>'Blvd. A. Lopez Mateos No. 825 Pte. Planta Baja', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Enrique Duran Llamas ', 'number'=>82, 'location'=>'León', 'email'=>'', 'phone'=>'(477)713-3829', 'address'=>'Av. Roma No. 317 Esq. Con Calle Madrid, Andrade', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Marcelo Gay Guerra', 'number'=>85, 'location'=>'León', 'email'=>'', 'phone'=>'(477) 713-3829', 'address'=>'blvd. J. Alonso de Torres No.1816 2do Piso, Jardines del Moral', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Jorge Humberto Carpio Mendoza', 'number'=>95, 'location'=>'León', 'email'=>'', 'phone'=>'(477)713-3124', 'address'=>'Calle Paseo del Moral 506, Jardines del Moral', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Jose Manuel Toriello Arce', 'number'=>98, 'location'=>'León', 'email'=>'', 'phone'=>'(477)470-7100', 'address'=>'Blvd. A. Lopez Mateos No. 825 Pte., Centro', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Jorge Arturo Zepeda Orozco', 'number'=>100, 'location'=>'León', 'email'=>'', 'phone'=>'(477)773-2300', 'address'=>'av. Insurgentes No. 210, Jardines del Moral', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Arturo Torres Martin del Campo', 'number'=>102, 'location'=>'León', 'email'=>'', 'phone'=>'(477)714-6896', 'address'=>'Hidalgo No. 241-4, Centro', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Jose Ciro Guerrero Guerrero', 'number'=>105, 'location'=>'León', 'email'=>'', 'phone'=>'(477) 714-1190', 'address'=>'La Paz No. 222, Centro', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Marco Antonio Zuñiga Torres', 'number'=>5, 'location'=>'Ocampo', 'email'=>'', 'phone'=>'(477)683-0244', 'address'=>'Calle Comonfort No. 303', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Francisco Javier Ortiz Ortiz', 'number'=>1, 'location'=>'San Felipe', 'email'=>'', 'phone'=>'(428) 685-0183', 'address'=>'Profesores No. 22, Centro', 'is_local'=>true]);
        Notary::create(['name'=>'Lic. Mario Zavala Perez', 'number'=>2, 'location'=>'San Felipe', 'email'=>'', 'phone'=>'(428)6985-0460', 'address'=>'Obregon No. 210 Antes 30, Centro', 'is_local'=>true]);
        Notary::create(['name'=>'Lic. Alejandro Trinidad Moreno Martinez', 'number'=>3, 'location'=>'San Felipe', 'email'=>'', 'phone'=>'(428)685-1268', 'address'=>'Calle Pino Suarez No. 132', 'is_local'=>true]);
        Notary::create(['name'=>'Lic. Refugio Hernandez Hernandez', 'number'=>11, 'location'=>'San Francisco del Rincón', 'email'=>'', 'phone'=>'(476)743-577', 'address'=>'Federico Medrano 101 Letra B', 'is_local'=>false]);
        Notary::create(['name'=>'Lic. Abdiel Ferro Vargas', 'number'=>4, 'location'=>'San Jóse Iturbide', 'email'=>'', 'phone'=>'(419)198-0960', 'address'=>'Allende No. 8 Interior "D"', 'is_local'=>false]);
    }
}
