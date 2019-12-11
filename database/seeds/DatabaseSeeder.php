<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Empleado::class, 500)->create();
        factory(App\Proyecto::class, 50)->create();
        factory(App\Departamento::class, 10)->create();
    }
}
