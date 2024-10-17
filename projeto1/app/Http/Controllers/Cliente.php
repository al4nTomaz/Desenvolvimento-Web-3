<?php
// http://wagnerweinert.com.br/phpmyadmin/db_structure.php?server=1&db=tads23_alan
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Cliente extends Controller
{
    public function create(){
        return view('Cliente.create');
    }
    
    public function store(Request $request){
        $status = ClienteModel::salvar($request);

        if ($status) {
            return redirect()->back()->with('mensagem', 'Cliente cadastrado com sucesso!');
        }else {
            return redirect()->back()->with('mensagem', 'Erro ao cadastrar cliente. tente novamente.');
        }
    }

    // public static listar
}
