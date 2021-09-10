@extends('layout.site')
@section('titulo', 'Adicionar Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Entrar</h3>
        <div class="row">
            <form action="{{route('site.login.entrar')}}" method="POST">
                {{ csrf_field() }}

                <div class="input-field">
                    <input type="email" name="email" id="email" required>
                    <label for="email">E-mail</label>
                </div>

                <div class="input-field">
                    <input type="password" name="senha" id="senha" required>
                    <label for="senha">Senha</label>
                </div>
                
                <button class="btn deep-orange">Entrar</button>
            </form>
        </div>
    </div>
@endsection