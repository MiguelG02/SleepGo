@extends('admin.Layouts.home')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col" style="font-size: 1.3vw">Cliente</th>
                <th scope="col" style="font-size: 1.3vw">Data de Entrada</th>
                <th scope="col" style="font-size: 1.3vw">Data de Saída</th>
                <th scope="col" style="font-size: 1.3vw">Preço Total</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($reservas as $reserva)
              @if ($reserva->estado->estado == 'Confirmada')
              <tr>
                <td style="font-size: 1.3vw">{{$reserva->user->name}}</td>
                <td style="font-size: 1.3vw">{{$reserva->diaReservaIni}}</td>
                <td style="font-size: 1.3vw">{{$reserva->diaReservaFin}}</td>
                <td style="font-size: 1.3vw">{{$reserva->precoTotal}}€</td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
    </div>
@endsection