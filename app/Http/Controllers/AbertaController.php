<?php

namespace App\Http\Controllers;

use App\Aberta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AbertaController extends Controller
{
    public function pesquisar()
    {
        // Recebe o conteúdo elemento 'descricao' do formulário
        $nome =Input::get('nome');

        // Busca produtos com o conteúdo da $descricao
        $ordem = Aberta::where('nome', 'like', '%'.$nome.'%')->get();

        // Chama a view produto.pequisar e envia os produtos buscados
        return view('ordem.pesquisar')->with('ordem', $ordem);





        // Chama a view produto.pesquisar e envia os produtos encontrados
        return view('produto.pesquisar')->with('produtos', $produtos);
    }
    public function mostrar_inserir()
    {
        return view('ordem.inserir');
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
