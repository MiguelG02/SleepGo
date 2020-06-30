@extends('admin.Layouts.home')

@section('content')
<div class="container">
    <p style="font-size: 2vw">Tabela de Users:</p>
    <table class="table" id="tblusers">
        <thead>
        <tr>
            <th scope="col" style="font-size: 1.3vw">Nome</th>
            <th scope="col" style="font-size: 1.3vw">Email</th>
        </tr>
        </thead>
        <tbody>
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