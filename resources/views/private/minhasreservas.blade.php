@extends('layouts.ap')

@section('content')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Data de Entrada</th>
        <th scope="col">Data de Saída</th>
        <th scope="col">Preço Total</th>
        <th scope="col">Estado da Reserva</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($reservas as $reserva)
        @if ($reserva->user->id == Auth::user()->id)
          <tr>
            <td>{{$reserva->diaReservaIni}}</td>
            <td>{{$reserva->diaReservaFin}}</td>
            <td>{{$reserva->precoTotal}}€</td>
            <td>{{$reserva->Estado->estado}}</td>
            <td>
              <form action="{{route('home.destroy',$reserva->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger" style="font-size: 1vw">Cancelar</button>
              </form>    
            </td>
          </tr>
        @endif  
      @endforeach
    </tbody>
  </table>
</div>

@endsection