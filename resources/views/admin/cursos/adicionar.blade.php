@extends('layout.site')
@section('titulo', 'Adicionar Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar cursos</h3>
        <div class="row">
            <form action="{{route('admin.cursos.salvar')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('admin.cursos._form')
                <button class="btn deep-orange">Adicionar</button>
            </form>
        </div>
    </div>
@endsection