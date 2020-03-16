@extends('admin.layouts.template')

@section('title', 'Detalhe do produto')

@section('content')

    <h1>Produto {{ $produto->name }}</h1>

    <a href="http://app-laravel.test/produtos" class="badge badge-light">Voltar</a>

    <ul>
        <li><strong>Nome: </strong>{{ $produto->name }}</li>
        <li><strong>Preço: </strong>{{ $produto->price }}</li>
        <li><strong>Descrição: </strong>{{ $produto->description }}</li>
    </ul>

@endsection