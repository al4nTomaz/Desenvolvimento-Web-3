<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteModel extends Model
{
    use HasFactory;

    public function salvar(Request $request){
        $status = DB::table('clientes')->insert([
            'nome'=>$request->input('nome'),
            'cpf'=>$request->input('cpf'),
            'telefone'=>$request->input('telefone'),
            'email'=>$request->input('email'),
        ]);

        return $status;
        // if ($status) {
        //     return redirect()->back()->with('mensagem', 'Cliente cadastrado com sucesso!');
        // }else {
        //     return redirect()->back()->with('mensagem', 'Erro ao cadastrar cliente. tente novamente.');
        // }
    }
}
