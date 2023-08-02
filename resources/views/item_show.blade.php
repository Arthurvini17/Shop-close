@extends('master')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/item_show.css') }}">

    <section id="container">
        <div class="all">
            <div class="image">
                <img src="/img/events/{{ $item->image }}">
            </div>
            <div class="item-info">
                <h2>{{ ucfirst($item->name ) }} </h2>
                <p>{{ ucfirst($eventOwner['name'])}}</p>
                <p class="item-name">Preço  {{ $item->preco }} <p></p>
                <p>{{ $item->grande ? 'O item é grande' : 'O item é pequeno' }}</p>
                <p>Descrição: {{ $item->description }}</p>
                <p>Endereço: {{$eventOwner['endereco']}}</p>
                <p>Contato: {{$eventOwner['contato']}}</p>
         
                <a href="{{ route('items.index') }}">voltar</a>
            </div>
        </div>
    </section>
@endsection
