@extends('admin.layouts.template')

@section('title', 'Gestão de produtos')

@section('content')
    <h1>{{$titulo}}</h1>
<!--
    @include('admin.includes.alerts', ['texto' => 'Texto do alerta'])


    @component('admin.components.card')
        @slot('titulo')
            <h1>Título do card</h1>
        @endslot
        Um card de exemplo
    @endcomponent
    <hr>

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
-->

    <div class="my-3">
        <a href="/produtos/create" class="btn btn-success">Cadastrar</a>
    </div>
    
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produtos as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        <a href="produtos/{{ $item->id }}" class="btn btn-outline-success btn-sm">Detalhe</a>
                        <a href="" class="btn btn-outline-primary btn-sm">Editar</a>
                        <a href="" class="btn btn-outline-danger btn-sm">Deletar</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Não existe produtos</td>
                </tr>
            @endforelse

        </tbody>
    </table>

    {!! $produtos->links() !!}


    

@endsection

@push('styles')
    <style>
        .destaque{color: #ff0000;}
    </style>
@endpush