@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<div class="container">
    <script type="text/javascript">
        function findDiff(){
        var diaReservaIni= document.getElementById("diaReservaIni").value;
        var diaReservaFin= document.getElementById("diaReservaFin").value;
        var date1 = new Date(diaReservaIni);
        var date2=new Date(diaReservaFin);
            
        var ONE_DAY = 1000 * 60 * 60 * 24
        var d1 = date1.getTime()
        var d2 = date2.getTime()
        var diff = Math.abs(d1 - d2)
        document.getElementById("days").value=Math.round(diff/ONE_DAY);

        var precoTotal= (document.form.preco.value)*(document.form.days.value);
        document.form.precoTotal.value=precoTotal;
      }     
    </script>
    
    <form action={{url('/home')}} method="POST" enctype="multipart/form-data" name="form">
    @csrf
    <div class="card text">
      <div class="row">
        <div class="col-md-6">
          <div class="card-body">
            <h2>Informações do Quarto</h2>
            <label>Tipo de Quarto:</label>
            <input type="text" class="form-control" value="{{$quartos->tipoqs->tipoQuarto}}" disabled>
            <label>Localização:</label>
            <input type="text" class="form-control" value="{{$quartos->localizacao->localizacao}}" disabled>
            <label>Preço:</label>
            <input type="text" class="form-control" value="{{$quartos->preco}}€" disabled>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h2>Informações Pessoais</h2>
            <label>Nome de utilizador:</label> 
            <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
            <label>Email do utilizador:</label>
            <input type="text" class="form-control" value="{{ Auth::user()->email }}" disabled>
            <br>
          </div>
        </div>
      </div>
    </div>
    <input type="hidden" class="form-control" id="idquarto" name="idquarto" value="{{$quartos->id}}">
    <input type="hidden" class="form-control" id="referencia" name="referencia" value="{{$quartos->referencia}}">
    <input type="hidden" class="form-control" id="codigo" name="codigo" value="{{$quartos->codigo}}">
        <br>
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label for="diaReservaIni">Dia de entrada:</label>
            <input type="Date" class="form-control" id="diaReservaIni" name="diaReservaIni" onchange="findDiff();">
            @error('diaReservaIni')
                <div class="invalid-feedback">{{$errors->first('diaReservaIni')}}</div>
            @enderror
        </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="diaReservaFin">Dia de saída:</label>
                <input type="Date" class="form-control" id="diaReservaFin" name="diaReservaFin" onchange="findDiff();">
                @error('diaReservaFin')
                    <div class="invalid-feedback">{{$errors->first('diaReservaFin')}}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group">
            <label for="precoTotal">Preço total:</label>
            <input type="text" class="form-control" id="precoTotal" name="precoTotal" readonly>
          </div>
          <div class="form-group" id="esconder">
            <select class="form-control" id="estado" name="estado" >
                @foreach ($estado as $est)
                    <option value="{{$est->id}}">{{$est->estado}}</option>
                @endforeach
            </select>
            @error('estado')
                <div class="invalid-feedback">{{$errors->first('estado')}}</div>
            @enderror
        </div>
        </div>
        <div class="col-md-2.5">
          <br>
          <input type="reset" class="btn btn-outline-dark" value="Apagar" style="height:50px; width:75px"  name="ok">
        </div>
      </div>
        <div class="row">
            <div class="col-sm-4">
              <input type="hidden" class="form-control" name="days" id="days" disabled/>
            </div>
            <div class="col-sm-2">
              <input type="hidden" class="form-control" id="preco" name="preco" value="{{$quartos->preco}}" disabled>
            </div>
        </div>
    @csrf
    <br><br>
    <script>
      function myFunction() {
        alert("Quarto reservado! Aguarde a confirmação da reserva que será enviada para o seu email.");
      }
    </script>
    <button type="submit" class="btn btn-outline-dark" onclick="myFunction()">Reservar</button>    <a href="/home" class="btn btn-outline-dark">Voltar</a>
    <br>
    </form>
  <br><br><br><br>
</div>
<style>
    #esconder{
        visibility: hidden;
    }
</style>
@endsection