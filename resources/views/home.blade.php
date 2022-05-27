@extends('layout.template')
@section('titulo','Página Inicial')
@section('conteudo')
    <h1 class="text-center">Últimas Notícias:</h1>
    @foreach ($noticias as $noticia)
        <div class="card">
            <a href="{{route('noticia', ['id' => $noticia->id])}}" title="{{$noticia->titulo}}">
                <img src="imagens/{{$noticia->imagem}}" alt="{{$noticia->titulo}}" class="w-100">
            </a>
            <div class="card-body">
                <h2>{{$noticia->titulo}}</h2>
                <p>Categoria: {{$noticia->categoria}} em {{$noticia->data1}}</p>
            </div>
        </div>
        <br>
    @endforeach

    {{$noticias->links()}}
@endsection