<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function entrar(Request $req)
    {
        $dados = $req->all();
        if (Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['senha']])) {
            Session::flash('mensagem', 'Usuário logado com sucesso!');
            return redirect()->route('admin.cursos');
        }
        Session::flash('mensagem', 'Usuário ou senha inválidos!');  
        return redirect()->route('site.login');
    }

    public function sair()
    {
        Auth::logout();
        Session::flash('mensagem', 'Usuário deslogado com sucesso!');
        return redirect()->route('site.home');
    }
}
