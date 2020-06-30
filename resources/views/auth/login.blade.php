@extends('layouts.app')

@section('content')
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <br>
                <center><img src="/imagens/login.png" class="img-fluid" alt="Responsive image" width="150" height="75"></center>
                <br>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Palavra-Passe" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <center>

                        <div class="form-group row mb-0">
                        <div class="col-md-12 offset-md-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Entrar') }}
                            </button>
                        </div>
                    </div>
                </center>
            </form>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
