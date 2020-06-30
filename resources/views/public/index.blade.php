@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
  
  <img src="/imagens/imagem1.jpg" class="imagem" alt="imagem1">
  <div class="container-fluid" id="div1">
    <br>
    <div class="container">
      <br>
      <h1 style="color:#6ba0bf">Quartos NapBox:</h1><br>
      <div class="row">
        <div class="col-sm-4">
          <div class="card; backCard">
            <br>
            <img src="/imagens/quarto1.png" class="card-img-top; center" id="quarto1">
            <div class="card-body">
              <h5 class="card-title">Quarto para 1 pessoa</h5>
              <p class="card-text">Preço por noite: 12€</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card; backCard">
            <img src="/imagens/quarto2.png" class="card-img-top; center" id="quarto2">
            <div class="card-body">
              <h5 class="card-title">Quarto para 1 pessoa</h5>
              <p class="card-text">Preço por noite: 15€</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card; backCard">
            <br>
            <img src="/imagens/quarto3.png" class="card-img-top; center" id="quarto3">
            <br><br>
            <div class="card-body">
              <h5 class="card-title">Quarto para 2 pessoas</h5>
              <p class="card-text">Preço por noite: 20€</p>
            </div>
          </div>
          <br><br>
        </div>
        <br>
      </div>
    </div>
  </div>
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