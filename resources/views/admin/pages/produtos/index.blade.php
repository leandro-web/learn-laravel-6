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
        <a href="/produtos/create" class="btn btn-success float-left">Cadastrar</a>

        <form action="/produtos/search" method="POST" class="form form-inline float-right">
            @csrf
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" name="filter" class="form-control" placeholder="Filtrar:" value="{{$filters['filter'] ?? ''}}">
            </div>
            <button type="submit" class="btn btn-primary mb-2">OK</button>
        </form>
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
                        <a href="produtos/{{ $item->id }}" class="btn btn-outline-success btn-sm float-left">Detalhe</a>
                        
                        <a href="produtos/{{ $item->id }}/edit" class="btn btn-outline-primary btn-sm float-left mx-3">Editar</a>

                        <form action="produtos/{{ $item->id }}" method="POST" class="float-left">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-outline-danger btn-sm" value="Deletar">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Não existe produtos</td>
                </tr>
            @endforelse

        </tbody>
    </table>

    @if (isset($filters))
        {!! $produtos->appends($filters)->links() !!}
    @else
        {!! $produtos->links() !!}
    @endif
    
     

    

@endsection

@push('styles')
    <style>
        .destaque{color: #ff0000;}
    </style>
@endpush