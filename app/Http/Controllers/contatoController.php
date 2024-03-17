<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    //
    public function index(Request $req)
    {
        //return "Esta no controle ";
        //dd($req);

    /*   
    ---------------------------EXERCÍCIO 1---------------------------
        $varContatos = 
        [
            ["nome"=>"SOFIA", "cel"=>"(14)99789-1221"],
            ["nome"=>"CLARA", "cel"=>"(14)99639-7301"],
            ["nome"=>"GABI", "cel"=>"(14)99379-1085"],
            ["nome"=>"ZAZA", "cel"=>"(14)99328-9842"],
            ["nome"=>"LAIS", "cel"=>"(14)99412-3628"]
        ];
    */
   
    /*
    ---------------------------EXERCÍCIO 2---------------------------
        $varContatos =
        [
            ["nome"=>$req['nome'], "cel"=>$req['cel']],
        ];
    */    

        $varTemas =
        [
            [ "tema"=>"Interface acessivel", "titulo" =>"App mobile com direitos da pessoa deficiente"],
            [ "tema"=>"Pedofilia", "titulo" => "App mobile com orientações gerais aos pais" ]
        ];

        return view("contato/index", compact('varTemas'));
    
    }
}
