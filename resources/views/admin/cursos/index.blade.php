@extends('layout.site')
@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de cursos</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($registros as $registro)
                        <tr>
                            <td>{{$registro->id}}</td>
                            <td>{{$registro->titulo}}</td>
                            <td>{{$registro->descricao}}</td>
                            <td><img height="60" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}"></td>
                            <td>{{$registro->publicado}}</td>
                            <td>
                                <a href="{{route('admin.cursos.editar', $registro->id)}}" class="btn deep-orange">Editar</a>
                                <a href="{{route('admin.cursos.deletar', $registro->id)}}" class="btn red" onclick="return confirm('Deseja excluir este curso?');">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a href="{{route('admin.cursos.adicionar')}}" class="btn blue">Adicionar</a>
        </div>
    </div>
@endsection