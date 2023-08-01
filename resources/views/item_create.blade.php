@extends('master')
@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/create.css') }}">

<section id="create">
    <h2>Create</h2>
    @if(session()->has('message'))
    {{ session()->get('message')}}
    @endif

    <form action="{{ route('items.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="image" name="image">Envie a foto do seu produto</label>
        <input type="file" name="image">
        <input type="text" name="name" placeholder="Nome do produto">
        <input type="number" name="preco" placeholder="Digite o preço do produto">
       
        
        <input type="text" name="marca" placeholder="Marca do produto">
        <label for="grande">O item é grande?</label>
        <select name="grande" id="">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
       
        <textarea name="description" maxlength="200" placeholder="fale sobre seu item">{{ old('description', 'Descrição padrão')}}</textarea>
        <button type="submit">Enviar</button>
    </form>
</section>
   

 
@endsection