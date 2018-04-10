<?php

namespace App\Http\Controllers;

use App\Aberta;
use Illuminate\Http\Request;

class AbertaController extends Controller
{
    public function pesquisar()
    {
        $ordem = Aberta::all();
        foreach ($ordem as $ordem){
            echo $ordem->nome . "<br>";
        }
    }

    public function inserir()
    {
        // Criando um novo objeto do tipo Aberta
        $aberta = new Aberta();

        // Colocando os valores recebidos do formulário nos atributos do objeto $produto
        $aberta->nome = Input::get('nome');
        $aberta->descricao = Input::get('descricao');
        $aberta->endereco = Input::get('endereco');
        $aberta->telefone = Input::get('telefone');
        $aberta->data_abertura = Input::get('data_abertura');

        // Salvando no banco de dados
        $aberta->save();

        // Criado uma mensagem para o usuário
        $mensagem = "O.S inserida com sucesso";

        // Chamando a view produto.inserir e enviando a mensagem criada
        return view('aberta.inserir')->with('mensagem', $mensagem);
    }
}
