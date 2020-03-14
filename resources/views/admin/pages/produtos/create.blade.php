@extends('admin.layouts.template')

@section('title', 'Cadastrar novo produto')

@section('content')
    <h1>Cadastrar novo produto</h1>

    <form action="/produtos" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descrição:">
        <input type="file" name="foto">
        <button type="submit">Salvar</button>
    </form>

@endsection