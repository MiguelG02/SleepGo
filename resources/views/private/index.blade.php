@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
          <section>
            <img src="/imagens/imagem1.jpg" class="imagem" alt="imagem1">
          </section>
          <section style="background:#b8d1e0">
            <br>
            <div class="container">
              <br>
              <h1 style="color:#6ba0bf">Quartos NapBox:</h1>
              <br><br>
              @foreach ($quartos as $quarto)
                <div class="card mb-3" style="max-width: 950px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="{{asset('imagens/' . $quarto->imagem)}}" height="150" width="300" class="img-thumbnail">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-9">
                            <h5 class="card-title">{{$quarto->tipoqs->tipoQuarto}}</h5>
                          </div>
                          <div class="col-sm-3">
                            <p class="card-text">{{$quarto->disponibilidade->disponibilidade}}</p>
                          </div>
                        </div>
                        <br>
                        <p class="card-text">{{$quarto->descricao->descricao}}</p>
                        <p class="card-text">Localização: {{$quarto->localizacao->localizacao}}</p>
                        <br>
                        <p class="card-text">Preço: {{$quarto->preco}}€ p/ noite</p>
                        <br>
                        @if ($quarto->disponibilidade->disponibilidade == 'disponivel')
                          <a href="/home/reservar/{{$quarto->id}}" class="btn btn-primary">Reservar</a>    
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
              {{ $quartos->links() }}
              </div>  
              <br>
          </section>
          <div class="container-fluid" id="div2" style="margin-bottom: -2%">
            <br>
            <div class="container">
              <div class="row">
                <div class="col-sm-4">
                  <br><br><br><br>
                    <p id="contacto" style="color:#6ba0bf; font-size: 2vw">Contacte-nos!!!</p>
                    <br><br>
                    <h6 style="font-size: 1.2vw">Email: napboxsleepgo@gmail.com <br><br>
                    Telemóvel: 927697542 <br><br>
                    Morada: Avenida da Liberdade, 144</h6>
                    <br><br>
                  </div>
                  <div class="col-sm-8">
                    <br>
                    <div id="googleMap"></div>
                    <script>
                      function myMap() {
                        var mapProp= {
                          center:new google.maps.LatLng(38.7193995,-9.14436),
                          zoom:15,
                        };
                        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                        var avenida = {lat: 38.7193995,lng: -9.14436};
                        var marker = new google.maps.Marker({
                          position: avenida,
                          map: map,
                          title: 'NapBox, Sleep&Go',
                        });
                      }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqeKtkpFmwWgsO0CgBRM-CT2Civ8oYui0&callback=myMap"></script>
                  </div>
                </div>
              </div>
              <br><br><br><br><br>
            </div>
@endsection