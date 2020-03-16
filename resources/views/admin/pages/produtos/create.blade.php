@extends('admin.layouts.template')

@section('title', 'Cadastrar novo produto')

@section('content')
    <h1>Cadastrar novo produto</h1>

    @include('admin.includes.alerts', ['alerta' => 'alert-danger'] )

    <form action="/produtos" method="post" enctype="multipart/form-data" class="form">
        @include('admin.pages.produtos.partials.form')
    </form>

@endsection