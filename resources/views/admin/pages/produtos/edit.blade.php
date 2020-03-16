@extends('admin.layouts.template')

@section('title', 'Editar o produto {{ $produto->name }}')

@section('content')
<h1>Editar o produto {{ $produto->name }}</h1>

<form action="/produtos/{{ $produto->id }}" method="post" class="form">
        @method('put')
        @include('admin.pages.produtos.partials.form')
    </form>

@endsection