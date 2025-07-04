<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlador_ejemplo extends Controller
{
    //

 public function hola(){
   
    echo "Hola Mundo";

 }

 public function fun_suma(Request $req){

   $valora = $req->input('num1');
   $valorb = $req->num2;
   $res =$valora + $valorb;
 
   return view('vista_res',compact('res'));

 }

  public function fun_mult(Request $req){

   $valora = $req->input('num1');
   $valorb = $req->num2;
   $res =$valora * $valorb;
 
   return view('vista_res',compact('res'));

 }




   public function fun_div(Request $req){

   $valora = $req->input('num1');
   $valorb = $req->num2;
   $res =$valora / $valorb;
 
   return view('vista_res',compact('res'));

 }


 public function formulario(){
   return view ('formulario');
 }

}
