<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';


    public function proyecto()
    {
        return $this->hasOne('App\Proyecto');
    }

    




    
    public function departamento()
    {
        return $this->hasOne('App\Departamento');
    }
}