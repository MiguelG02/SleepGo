@extends('admin.Layouts.home')

@section('content')
    <div class="container">
      <br>
      <p style="font-size: 2vw">Reservas:</p>
        <table class="table">
            <thead>
              <tr>
                <th scope="col" style="font-size: 1.3vw">Cliente</th>
                <th scope="col" style="font-size: 1.3vw">Data de Entrada</th>
                <th scope="col" style="font-size: 1.3vw">Data de Saída</th>
                <th scope="col" style="font-size: 1.3vw">Preço Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($reservas as $reserva)
              @if ($reserva->estado->estado == 'Por Confirmar')
              <tr>
                <td style="font-size: 1.3vw">{{$reserva->user->name}}</td>
                <td style="font-size: 1.3vw">{{$reserva->diaReservaIni}}</td>
                <td style="font-size: 1.3vw">{{$reserva->diaReservaFin}}</td>
                <td style="font-size: 1.3vw">{{$reserva->precoTotal}}€</td>
                <td>
                  <a href="/reservas/{{$reserva->id}}/edit" style="font-size: 1.3vw" class="btn btn-success">Confirmar</a>
                </td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
    </div>
@endsection