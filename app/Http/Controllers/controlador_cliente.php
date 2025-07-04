<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelo_cliente;
class controlador_cliente extends Controller
{
    public function mostrar_clientes(){

        $clientes = modelo_cliente::get();

        return view('mostrar_cliente', compact('clientes'));
    }

}
