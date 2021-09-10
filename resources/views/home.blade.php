@extends('layout.site')
@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de cursos</h3>
        <div class="row">
            @foreach ($cursos as $curso) 
                <div class="col s12 m4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img class="materialboxed" src="{{asset($curso->imagem)}}">
                        </div>
                        <div class="card-content">
                            <span class="card-title">{{$curso->titulo}}</span>
                            <p>{{$curso->descricao}}</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Ver mais...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row center">
            {{ $cursos->links('vendor.pagination.materialize') }}
        </div>
    </div>
@endsection