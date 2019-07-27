<?php

use Illuminate\Database\Seeder;
use \App\Profesion;

class ProfesionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Profesion::class)->times(5)->create();
    }
}
