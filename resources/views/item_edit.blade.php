@extends('master')
@section('title', 'Editando: ' . $item->title)
<link rel="stylesheet" href="{{ asset('assets/css/item_edit.css') }}">


@section('content')
    <h2>edit</h2>

    @if(session()->has('message'))
    {{ session()->get('message')}}
    @endif

    <form action="{{ route('items.update', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">

        <label for="image" name="image">Envie a foto do seu produto</label>
        <input type="file" name="image">
        <img src="/img/events/{{$item->image}}" alt="">

        <input type="text" name="name"  value="{{$item->name}}">

        <input type="number" name="preco" value="{{$item->preco}}">

        <input type="text" name="marca" value="{{$item->marca}}">

        <label for="grande">O item é grande?</label>

        <select name="grande" id="">
            <option value="0">Não</option>
            <option value="1" {{$item->grande == 1 ? "selected='selected'" : ""}}>Sim</option>
        </select>
        
        <textarea name="description" maxlength="200" value="{{$item->description}}">{{ old('description', 'Descrição padrão')}}</textarea>
        
        <button type="submit">Enviar</button>
    </form>
    
@endsection