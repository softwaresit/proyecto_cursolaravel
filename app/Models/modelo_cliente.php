<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class modelo_cliente extends Model
{
    

    protected $table = "clientes";

    protected $primaryKey = "cod_cliente";
    public $timestamps = false;

    protected $fillable = [
     'cod_cliente','nombre','celular','nit','domicilio'
    ];
    
}
