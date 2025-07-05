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


    public function formulario_cliente(){
        return view('formulario_cliente');
    }
    public function guardar(Request $req){

        $cliente = new modelo_cliente();
        $cliente->nombre = $req->input('nom');
        $cliente->celular = $req->input('cel');
        $cliente->nit = $req->input('nit');
        $cliente->domicilio = $req->input('dom');

        $cliente->save();
   return view('formulario_cliente');
    }
}
