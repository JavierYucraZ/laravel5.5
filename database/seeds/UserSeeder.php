<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\User;
use \App\Ingreso;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$md1=DB::select('SELECT id FROM foraneas WHERE controlador = "Periodico"');

    	DB::table('users')->insert([
            'name' => 'Usuario 01',
            'email' => 'user01@gmail.com',
            'password' => 'contraseña',
            'foraneas_id' => $md1[0]->id
        ]);

        $md2 = DB::select('SELECT id FROM foraneas WHERE controlador = ?', ['Email']);
        DB::table('users')->insert([
            'name' => 'Usuario 02',
            'email' => 'user02@gmail.com',
            'password' => 'contraseña',
            'foraneas_id' => $md2[0]->id
        ]);

        $md3 = DB::table('foraneas')->select('id')->where('controlador','Radio')->first();
        DB::table('users')->insert([
           'name' => 'Usuario 03',
            'email' => 'user03@gmail.com',
            'password' => 'contraseña',
            'foraneas_id' => $md3->id 
        ]);

        DB::table('users')->insert([
            'name' => 'Usuario 04',
            'email' => 'user04@gmail.com',
            'password' => bcrypt('contraseña'),
            'foraneas_id' => DB::table('foraneas')->wherecontrolador('Periodico')->value('id')
        ]);

        $md4 = Ingreso::where('controlador','Periodico')->value('id');
        User::create([
            'name' => 'Usuario 05',
            'email' => 'user05@gmail.com',
            'password' => bcrypt('contraseña'),
            'foraneas_id' => $md4
        ]);*/


        factory(User::class, 10)->create();
    }
}
