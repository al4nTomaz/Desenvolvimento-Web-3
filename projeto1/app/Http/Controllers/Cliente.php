<?php
// http://wagnerweinert.com.br/phpmyadmin/db_structure.php?server=1&db=tads23_alan
namespace App\Http\Controllers;

use App\Models\ClienteModel;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Cliente extends Controller
{
    public function create(){
        return view('Cliente.create');
    }
    
    public static function store(Request $request){
        $status = ClienteModel::salvar($request);

        if ($status) {
            return redirect()->back()->with('mensagem', 'Cliente cadastrado com sucesso!');
        }else {
            return redirect()->back()->with('mensagem', 'Erro ao cadastrar cliente. tente novamente.');
        }
    }

    public function index(){
        $clientes = ClienteModel::listar();
        return view('Cliente.index', compact('clientes'));
    }

    public function destroy($id){
        $status = ClienteModel::deletar($id);

        if ($status) {
            return redirect('listarCliente')->with('mensagem', 'Cliente deletato com sucesso!');
        }else {
            return redirect('listarCliente')->with('mensagem', 'Erro ao encontrar cliente. tente novamente.');
        }
    }
}
