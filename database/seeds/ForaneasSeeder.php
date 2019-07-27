<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Ingreso;
use \App\PruebaFactory;
class ForaneasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingreso::create([
            'controlador' => 'Email'
        ]);

        DB::table('foraneas')->insert([
        	'controlador' => 'Radio'
        ]);
        DB::table('foraneas')->insert([
        	'controlador' => 'Internet'
        ]);

        DB::table('foraneas')->insert([
        	'controlador' => 'Periodico'
        ]);

        DB::insert('INSERT INTO foraneas (controlador) VALUES ("Pagina Web")');

        DB::insert('INSERT INTO foraneas (controlador) VALUES (?)',['Recomendacion']);

        DB::insert('INSERT INTO foraneas (controlador) VALUES(:variable_cambio)',['variable_cambio'=>'Beca']);

        //factory(Ingreso::class)->create();
        //factory(Ingreso::class, 10)->create();
        //factory(Ingreso::class)->times(25)->create();
    }
}
