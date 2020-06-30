@extends('Admin.Layouts.home')

@section('content')
<section class="content">
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-7">
          <div class="card">
            <div class="card-header" style="background-color: #6ba0bf">
              <h3 class="card-title" style="color:white; font-size: 1.5vw">Tipo de Quarto</h3>
            </div>
            <div class="card-body">
               @foreach ($tipo as $tp)
               <div class="callout callout-success" id="callout">
               <div class="row">
                <div class="col-8">
                  <h5 style="font-size: 1.2vw">{{$tp->tipoQuarto}}</h5>
                  </div>
                  <div class="col-4">
                      <div class="row">
                      <a href="/Tipos/{{$tp->id}}/edit" class="btn btn-secondary mr-2" style="font-size: 1.2vw"><font color="white">Editar</font></a> 
                      <form action="{{route('Tipos.destroy',$tp->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" style="font-size: 1.2vw">Eliminar</button>
                      </form>
                      </div>
                  </div>
               </div>
              </div>
               @endforeach
               <style>
                 #callout{
                  padding: 10px;
                  margin: 5px 0;
                  border-left-width: 5px;
                  border-radius: 3px;
                  border-left-color: #071e33;
                 }
               </style>
            </div>
            <div class="card-footer">
              {{ $tipo->links() }}
            </div>
          </div>
        </div>
        <!-- left column -->
        <div class="col-5">
          <!-- general form elements -->
          
          @if ($cr_ed==0)
          <div class="card">
            <div class="card-header" style="background-color: #6ba0bf">
              <h3 class="card-title" style="color:white; font-size: 1.5vw">Novo Tipo de quarto</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('Tipos.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label style="font-size: 1.2vw">Tipos de Quarto</label>
                  <input type="text" class="form-control @if($errors->any('tipoQuarto')) @if($errors->has('tipoQuarto')) is-invalid @else is-valid @endif @endif" id="tipoQuarto" name="tipoQuarto" value="{{old('tipoQuarto')}}" placeholder="tipoQuarto">
                    @error('tipoQuarto')
                      <div class="invalid-feedback">{{$errors->first('tipoQuarto')}}</div>
                    @enderror
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn" style="background-color: #6ba0bf; font-size: 1.2vw"><font color="white">Adicionar</font></button>
              </div>
            </form>
          </div>
          @else
          <div class="card">
            <div class="card-header" style="background-color: #6ba0bf">
              <h3 class="card-title" style="color:white; font-size: 1.5vw">Editar Tipo de quarto</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('Tipos.update',$tp_edit->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="card-body">
                <div class="form-group">
                  <label for="tipoQuarto" style="font-size: 1.2vw">Localização</label>
                  <input type="text" class="form-control @if($errors->any('tipoQuarto')) @if($errors->has('tipoQuarto')) is-invalid @else is-valid @endif @endif" id="tipoQuarto" name="tipoQuarto" value="{{$tp_edit->tipoQuarto}}" placeholder="tipoQuarto">
                  @error('tipoQuarto')
                    <div class="invalid-feedback">{{$errors->first('tipoQuarto')}}</div>
                  @enderror
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-secondary" style="font-size: 1.2vw">Guardar</button>
                <a href="/Tipos" class="btn btn-danger" style="font-size: 1.2vw">Cancelar</a>
              </div>
            </form>
          </div>
          @endif
        </div>
      </div>
    </div>
  </section>
@endsection