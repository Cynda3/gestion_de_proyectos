<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Empleado;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10; $i++) { 
	        Empleado::insert([
	          'nombre'=> Str::random(10),
	          'apellido'=> Str::random(10),
	          'email'=> Str::random(10)."@gmail.com",
	          'telefono'=> Str::random(10)
	        ]);
    	}
    }
}
