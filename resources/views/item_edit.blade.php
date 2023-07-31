@extends('master')
@section('content')


    <h2>edit</h2>

    @if(session()->has('message'))
    {{ session()->get('message')}}
    @endif

    <form action="{{ route('items.update', ['item' => $item->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name" value="{{ $user->name }}">
        <button type="submit">Enviar</button>
    </form>
    
@endsection