@extends('admin.Layouts.home')

@section('content')
    <div class="container">
        <p style="font-size: 2vw">Quartos NapBox:</p>
        <br>
        <a href="/Quartos/create" type="button" class="btn btn-info" style="font-size: 1.2vw">Criar Quarto</a>
        <br><br>
        @foreach ($quartos as $quarto)
            <div class="card mb-3" style="max-width: 950px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{asset('imagens/' . $quarto->imagem)}}" height="130" width="260" class="img-thumbnail">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5 class="card-title" style="font-size: 1.3vw">{{$quarto->tipoqs->tipoQuarto}}</h5>
                                </div>
                                <div class="col-sm-2">
                                    <p class="card-text" style="font-size: 1vw">{{$quarto->disponibilidade->disponibilidade}}</p>
                                </div>
                            </div>
                            <br>
                            <p class="card-text" style="font-size: 1vw">Referência: {{$quarto->referencia}}</p>
                            <p class="card-text" style="font-size: 1vw">{{$quarto->descricao->descricao}}</p>
                            <p class="card-text" style="font-size: 1vw">Localização: {{$quarto->localizacao->localizacao}}</p>
                            <p class="card-text" style="font-size: 1vw">Preço: {{$quarto->preco}}€</p>
                            <div class="row">
                                <div class="col-sm-2">
                                    <a href="/Quartos/{{$quarto->id}}/edit" style="font-size: 1vw" class="btn btn-info">Editar</a>
                                </div>
                                <div class="col-sm-10">
                                    <form action="/Quartos/{{$quarto->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" style="font-size: 1vw" value="Apagar">
                                    </form>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection