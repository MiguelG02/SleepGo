@extends('admin.Layouts.home')

@section('content')
<div class="container">
    <p style="font-size: 2vw">Tabela de Utilizadores:</p>
    <button class="btn btn-info" onclick="myFunction()">Total de utilizadores</button>
      
      <p id="demo"></p>

      <script>
        function myFunction() {
          var x = document.getElementById("tblusers").rows.length;
          document.getElementById("demo").innerHTML = "Existem " + x + " utilizadores";
        }
      </script>
    <table class="table">
        <thead>
        <tr>
            <th scope="col" style="font-size: 1.3vw">Nome</th>
            <th scope="col" style="font-size: 1.3vw">Email</th>
        </tr>
        </thead>
        <tbody id="tblusers">
        @foreach ($users as $user)
        <tr>
            <td style="font-size: 1.3vw">{{$user->name}}</td>
            <td style="font-size: 1.3vw">{{$user->email}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection