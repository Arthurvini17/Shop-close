@extends('master')
@section('content')


<a href="{{route('items.create')}}">Create</a>
    <h2>items/h2>
    <ul>
        @foreach ($items as $item)
        <li>{{$item->name}} <a href="{{ route('items.edit', ['item' => $item->id]) }}">Edit</a>  <a href="{{ route('items.show', ['item'=> $item->id]) }}">Show</a>

        </li>
        <img src="/img/events/{{$item->image}}">
        @endforeach
    </ul>
    
@endsection
