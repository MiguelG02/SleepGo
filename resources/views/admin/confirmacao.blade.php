@extends('admin.Layouts.home')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <div class="card text-center">
                <div class="card-header" style="background-color: #6ba0bf">
                    <h3>Confirmação da reserva</h3>
                </div>
                <form action='/reservas/{{$reservas->id}}' method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-1">

                        </div>
                        <div class="col-sm-10">
                            <div class="card-body">    
                                <div class="form-group">
                                    <label>Cliente</label>
                                    <input type="text" class="form-control" value="{{$reservas->user->name}}" disabled>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Data de Entrada</label>
                                            <input type="text" class="form-control" value="{{$reservas->diaReservaIni}}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Data de Saída</label>
                                            <input type="text" class="form-control" value="{{$reservas->diaReservaFin}}" disabled>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <label>Preço</label>
                                    <input type="text" class="form-control" value="{{$reservas->precoTotal}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="estado_id">Estado</label>
                                    <select class="form-control @if($errors->any('estado_id')) @if($errors->has('estado_id')) is-invalid @else is-valid @endif @endif" id="estado_id" name="estado_id" value="{{$reservas->estado_id}}">
                                        @foreach ($estado as $est)
                                            <option value="{{$est->id}}">{{$est->estado}}</option>
                                        @endforeach
                                    </select>
                                    @error('estado_id')
                                        <div class="invalid-feedback">{{$errors->first('estado_id')}}</div>
                                    @enderror
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success">Email de Confirmação</button>
                                <a href="/reservas" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            
                        </div>
                    </div>
                  </form>
                <div class="col-sm-2">
        
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            
        </div>
    </div>
</div>
@endsection