<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function testar() {
        $produto = "cebola";
        $valor = 1.50;
        // return view('teste', ['item'=>$produto, 'preco'=>$valor]);
        return view('teste',compact('produto','valor'));
    
        // $clientes = array("João", "Pedro", "Lucas");
        // return view('teste' , compact('clientes'));
    
    }

    public function smb() {
        return view('smb');
    }
    
    public function smb2() {
        return view('smb2');
    }
    
    public function smb3() {
        return view('smb3');
    }
    
    public function smb4() {
        return view('smb4');
    }
    
    public function tabuadatematica() {
        $valor = 3;
        return view('tabuadatematica', compact('valor'));
    
    }
    
    public function home() {
        return view('home');
    }
}
