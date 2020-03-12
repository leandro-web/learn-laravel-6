@extends('admin.layouts.template')

@section('title', 'Gestão de produtos')

@section('content')

    @include('admin.includes.alerts', ['texto' => 'Texto do alerta'])

    <hr>

    @component('admin.components.card')
        @slot('titulo')
            <h1>Título do card</h1>
        @endslot
        Um card de exemplo
    @endcomponent
    <hr>

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

    <ul>
        @forelse ($lista as $item)
            <li class="@if ($loop->first) destaque @endif">{{$item}}</li>
        @empty
            Não existe itens
        @endforelse
    </ul>
    

@endsection

@push('styles')
    <style>
        .destaque{color: #ff0000;}
    </style>
@endpush