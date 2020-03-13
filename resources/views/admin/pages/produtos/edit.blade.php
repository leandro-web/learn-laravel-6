@extends('admin.layouts.template')

@section('title', 'Editar o produto')

@section('content')
<h1>Editar o produto {{ $id }}</h1>

<form action="/produtos/{{$id}}" method="post">
        @method('put')
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição:">
        <button type="submit">Editar</button>
    </form>

@endsection