@extends('master')
@section('content')



<div class="container">
    <h2>Create</h2>
    @if(session()->has('message'))
    {{ session()->get('message')}}
    @endif

    <form action="{{ route('items.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Seu nome" value="Arthur">
        <input type="number" name="preco" placeholder="Digite o preço do produto">
        <label for="image" name="image">Envie a foto do seu produto</label>
        <textarea name="description" placeholder="fale sobre seu item">{{ old('description', 'Descrição padrão')}}</textarea>

        <input type="file" name="image">
       
        <button type="submit">Enviar</button>
    </form>
</div>
   

 
@endsection