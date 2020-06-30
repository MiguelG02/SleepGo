@extends('Admin.Layouts.home')

@section('content')
<section class="content">
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-7">
          <div class="card">
            <div class="card-header" style="background-color: #6ba0bf">
              <h3 class="card-title" style="color:white; font-size: 1.5vw">Descricões</h3>
            </div>
            <div class="card-body">
               @foreach ($desc as $descricao)
               <div class="callout callout-success" id="callout">
               <div class="row">
                <div class="col-8">
                  <h5 style="font-size: 1.2vw">{{$descricao->descricao}}</h5>
                  </div>
                  <div class="col-4">
                      <div class="row">
                      <a href="/Descricoes/{{$descricao->id}}/edit" class="btn btn-secondary mr-2" style="font-size: 1.2vw"><font color="white">Editar</font></a> 
                      <form action="{{route('Descricoes.destroy',$descricao->id)}}" method="POST">
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
              {{ $desc->links() }}
            </div>
          </div>
        </div>
        <!-- left column -->
        <div class="col-5">
          <!-- general form elements -->
          
          @if ($cr_ed==0)
          <div class="card">
            <div class="card-header" style="background-color: #6ba0bf">
              <h3 class="card-title" style="color:white; font-size: 1.5vw">Nova Descrição</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('Descricoes.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label style="font-size: 1.2vw">Descrição</label>
                  <input type="text" class="form-control @if($errors->any('descricao')) @if($errors->has('descricao')) is-invalid @else is-valid @endif @endif" id="descricao" name="descricao" value="{{old('descricao')}}" placeholder="descricao">
                    @error('descricao')
                      <div class="invalid-feedback">{{$errors->first('descricao')}}</div>
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
              <h3 class="card-title" style="color:white; font-size: 1.5vw">Editar Descrição</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('Descricoes.update',$desc_edit->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
              <div class="card-body">
                <div class="form-group">
                  <label for="descricao" style="font-size: 1.2vw">Descrição</label>
                  <input type="text" class="form-control @if($errors->any('descricao')) @if($errors->has('descricao')) is-invalid @else is-valid @endif @endif" id="descricao" name="descricao" value="{{$desc_edit->descricao}}" placeholder="descricao">
                  @error('descricao')
                    <div class="invalid-feedback">{{$errors->first('descricao')}}</div>
                  @enderror
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-secondary" style="font-size: 1.2vw">Guardar</button>
                <a href="/Descricoes" class="btn btn-danger" style="font-size: 1.2vw">Cancelar</a>
              </div>
            </form>
          </div>
          @endif
        </div>
      </div>
    </div>
  </section>
@endsection