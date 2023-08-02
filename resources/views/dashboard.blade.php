<!-- View (dashboard.blade.php) -->
@extends('master')
@section('title', 'Meus itens')
<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css')}}">
@section('content')

<h1>Dashboard</h1>

@if(count($items) > 0)
<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Item Name</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td class="index">{{$loop->index + 1}}</td>
                <td class="item-name"><a href="/items/{{$item->id}}">{{$item->name}}</a></td>
                <td class="item-image">
                    @if($item->image)
                        <img src="/img/events/{{ $item->image }}" alt="Imagem do item {{$item->name}}" class="item-img">
                    @else
                        <span>No Image</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<p>Voce ainda nao tem eventos, <a href="{{ route('items.create') }}">Crie aqui</a></p>
@endif
@endsection

