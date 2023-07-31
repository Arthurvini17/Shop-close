@extends('master')
@section('content')


    <h2>User -{{$item->name}}</h2>
    <img src="/img/events/{{$item->image}}">

    <form action="{{route('items.destroy',['item' => $item->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Delete</button>
    </form>
    
@endsection