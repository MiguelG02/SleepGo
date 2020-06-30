@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="container">
        <br>
        <h1 style="color:#6ba0bf">Quartos NapBox:</h1>
        <br><br>
        @foreach ($quartos as $quarto)
            <div class="card mb-3" style="max-width: 950px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{asset('imagens/' . $quarto->imagem)}}" height="80%" width="80%" class="img-thumbnail">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$quarto->tipoqs->tipoQuarto}}</h5>
                            <p class="card-text">Referência: {{$quarto->referencia}}</p>
                            <p class="card-text">{{$quarto->descricao->descricao}}</p>
                            <p class="card-text">Localização: {{$quarto->localizacao->localizacao}}</p>
                            <p class="card-text">Preço: {{$quarto->preco}}€</p>
                            <a href="/home/reservar/{{$quarto->id}}"><button class="btn btn-info">Reservar</button></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $quartos->links() }}
        <br>
    </div>
    <br>
</section>
@endsection