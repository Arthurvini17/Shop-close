@extends('master')
@section('content')
@section('title', 'Itens da loja')
<link rel="stylesheet" href="{{ asset('assets/css/itens.css')}}">
<div class="container">
    <div class="itens">
        <div class="search">
            <form action="/items" method="GET">
            <input type="search" class="search__input" placeholder="O que esta procurando?" name="search">
            <button class="search__button">
            </button>
        </form>
        </div>

        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @endif
        <h2>Itens</h2>
        <div class="item-grid">
            @foreach ($items as $item)
                <div class="item">
                    <img src="/img/events/{{ $item->image }}">
                    <p>R${{ $item->preco }} </p>
                   
                    <p>{{ $item->name }} </p>
                    <p> {{ $item->description }}</p>
                    
                    
                     <p>  <a href="{{ route('items.show', ['id' => $item->id]) }}">Ver Produto</a> </p>
                </div>
            @endforeach
        </div>
        <div class="search-sub">


            @if (count($items) == 0 && $search)
                <p>Não há itens disponíveis com essa busca <a href="/items">Ver todos</a></p>
            @elseif(count($items) == 0)
                <p>Não há itens disponíveis</p>
            @endif
        </div>
    </div>
</div>
@endsection
