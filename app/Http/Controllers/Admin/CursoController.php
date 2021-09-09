<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Curso;
use Session;

class CursoController extends Controller
{
    public function index()
    {
        $registros = Curso::all();
        return view('admin.cursos.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }
        
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/cursos/";
            $ext = $imagem->guessClientExtension();
            $nomeImagem = "imagem_". $num. ".". $ext;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir. "/". $nomeImagem;
        }

        Curso::create($dados);
        Session::flash('mensagem', 'Curso adicionado com sucesso!');
        return redirect()->route('admin.cursos');
    }
    
    public function editar($id)
    {
        $registro = Curso::find($id);
        return view('admin.cursos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }
        
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/cursos/";
            $ext = $imagem->guessClientExtension();
            $nomeImagem = "imagem_". $num. ".". $ext;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir. "/". $nomeImagem;
        }

        Curso::find($id)->update($dados);
        Session::flash('mensagem', 'Curso atualizado com sucesso!');
        return redirect()->route('admin.cursos');
    }
    
    public function deletar($id)
    {
        Curso::find($id)->delete();
        Session::flash('mensagem', 'Curso excluido com sucesso!');
        return redirect()->route('admin.cursos');
    }
}
