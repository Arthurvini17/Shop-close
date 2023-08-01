@extends('master')
@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/item_show.css')}}">

<section id="container">
<div class="all">

    <h2>Item-{{$item->name}} </h2>
    <div class="image">
    <img src="/img/events/{{$item->image}}">
</div>
    <p>Preço do:{{$item->name}} {{$item->preco}}</p>
    <p>Descriçao {{$item->description}}</p>
    {{-- <form action="{{route('items.destroy',['item' => $item->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Delete</button>
    </form> --}}
</div>
</section>
<a href="{{ route('items.index') }}">voltar</a>
@endsection