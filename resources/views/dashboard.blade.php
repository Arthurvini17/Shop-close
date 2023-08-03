<!-- View (dashboard.blade.php) -->
@extends('master')
@section('title', 'Meus itens')
<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@section('content')

    <h1>Dashboard</h1>

    @if (isset($items) && count($items) > 0)

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Image</th>
                 <th>Ações</th>
             </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                     <tr>
                         <td class="index">{{ $loop->index + 1 }}</td>
                        <td class="item-name">
                            <a href="/items/{{ $item->id }}">{{ $item->name }}</a>
                        </td>
                        <td class="item-image">
                             @if ($item->image)
                                 <img src="/img/events/{{ $item->image }}" alt="Imagem do item {{ $item->name }}"
                                 class="item-img">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td>
                                <div class="containerform">
                                    <form action="{{ route('items.destroy', ['item' => $item->id]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="delete" type="submit">Delete</button>
                                    </form>
                                    <form action="{{ route('items.edit', ['id' => $item->id]) }}" method="GET">
                                        <button class="edit" type="submit">Editar</button>
                                    </form>
                            </td>
                                </div>
                                </tr>
                            @endforeach
                            </tbody>
                            </table>
                            </div>
@else
    <p>Voce ainda nao tem Items, <a href="{{ route('items.create') }}">Crie aqui</a></p>
    @endif
@endsection
