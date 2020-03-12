@extends('admin.layouts.template')

@section('title', 'Gestão de produtos')

@section('content')
    <h1>{{$titulo}}</h1>

    <p>{{$data}}</p>

    @if ($idade > 18)
        <p>Ele tem {{$idade}} anos, então é maior de idade</p>
    @elseif ($idade == 18)
        <p>Ele tem exatamente {{$idade}} anos</p>
    @else
        <p>Ele tem {{$idade}} anos, então é menor de idade</p>
    @endif

    @isset($data)
        <p>Existe a variavel data</p>
    @endisset

    @auth
        <p>Está logado</p>
    @else
        <p>Não está logado</p>
    @endauth

@endsection

