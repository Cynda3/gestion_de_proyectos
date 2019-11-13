<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Proyecto;

class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 5; $i++) { 
	        Proyecto::insert([
	          'nombre'=> Str::random(10),
	          'titulo'=> Str::random(10),
	          'fechainicio'=> "2019-12-01",
	          'fechafin'=> "2019-12-01",
	          'horasestimadas' => 10
	        ]);
    	}
    }
}
