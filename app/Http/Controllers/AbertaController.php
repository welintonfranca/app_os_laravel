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

        // Chama a view produto.pequisar e envia os resultados buscados
        return view('ordem.pesquisar')->with('ordem', $ordem);

    }
    public function mostrar_inserir()
    {
        return view('ordem.inserir');
    }

    public function inserir()
    {
        // Criando um novo objeto do tipo Aberta
        $aberta = new Aberta();

        // Colocando os valores recebidos do formulário nos atributos do objeto $aberta
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
        return view('ordem.inserir')->with('mensagem', $mensagem);
    }
    public function mostrar_alterar($id){
        //Buscar no banco o registro com o id recebido
        $or = Aberta::find($id);

        // Enviar os dados deste registro a view ordem.alterar
        return view('ordem.alterar')->with('ordem',$or);
    }
    public function alterar(){
        $id = Input::get('id');
        $p = Aberta::find($id);

        $p->problema_constatado = Input::get('problema_constatado');
        $p->valor =  Input::get('valor');
        $p->data_fechamento = Input::get('data_fechamento');

        $p->save();

        $mensagem = "Ordem de serviço alterado com sucesso!";
        $os = Aberta::all();
        return view('ordem.pesquisar')->with('mensagem', $mensagem)->with('ordem', $os);
    }
}
