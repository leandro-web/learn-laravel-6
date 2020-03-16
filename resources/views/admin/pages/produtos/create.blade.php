@extends('admin.layouts.template')

@section('title', 'Cadastrar novo produto')

@section('content')
    <h1>Cadastrar novo produto</h1>

    @include('admin.includes.alerts', ['alerta' => 'alert-danger'] )

    <form action="/produtos" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Nome:" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description" placeholder="Descrição:" value="{{ old('description') }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="Preço:" value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
        
    </form>

@endsection