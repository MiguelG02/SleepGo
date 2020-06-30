@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mb-3" style="max-width: 950px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{asset('imagens/' . $quartos->imagem)}}" height="150" width="300" class="img-thumbnail">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$quarto->tipoqs->tipoQuarto}}</h5>
                    <p class="card-text">Referência: {{$quartos->referencia}}</p>
                    <p class="card-text">{{$quarto->descricao->descricao}}</p>
                    <p class="card-text">Localização: {{$quarto->localizacao->localizacao}}</p>
                    <p class="card-text">Preço: {{$quartos->preco}}€</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection