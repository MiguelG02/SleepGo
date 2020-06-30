@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($quartos as $quarto)
    <li>
        <img src="{{asset('imagens/' . $quarto->imagem)}}" height="100" width="100" class="img-thumbnail">
        <h5 class="card-title">{{$quarto->tipoQuarto}}</h5>
        <p class="card-text">{{$quarto->descricao}}</p>
        <h4 class="card-text">{{$quarto->preco}}</h4>
        <p class="card-text">{{$quarto->localizacao}}</p>
    </li>
    @endforeach
</div>
@endsection