@extends('layout.template')
@section('titulo','Notícia')
@section('conteudo')
    <h1>{{$noticia->titulo}}</h1>
    <img src="imagens/{{$noticia->imagem}}" class="w-100">
@endsection