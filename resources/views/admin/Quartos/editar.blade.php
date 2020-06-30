@extends('admin.Layouts.home')

@section('content')
<div class="container">
  <br>
    <h1 style="font-size: 2vw">Editar Quarto</h1>
    <br>
    <form action='/Quartos/{{$quartos->id}}' method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="tipoqs_id" style="font-size: 1.2vw">Tipo de Quarto</label>
              <select class="form-control @if($errors->any('tipoqs_id')) @if($errors->has('tipoqs_id')) is-invalid @else is-valid @endif @endif" id="tipoqs_id" name="tipoqs_id" value="{{$quartos->tipoqs_id}}">
                  @foreach ($tipoquartos as $tipoquarto)
                      <option value="{{$tipoquarto->id}}">{{$tipoquarto->tipoQuarto}}</option>
                  @endforeach
              </select>
              @error('tipoqs_id')
                  <div class="invalid-feedback">{{$errors->first('tipoqs_id')}}</div>
              @enderror
          </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="referencia" style="font-size: 1.2vw">Referência</label>
              <input type="text" class="form-control @if($errors->any('referencia')) @if($errors->has('referencia')) is-invalid @else is-valid @endif @endif" id="referencia" name="referencia" value="{{$quartos->referencia}}" placeholder="Referência">
              @error('referencia')
                <div class="invalid-feedback">{{$errors->first('referencia')}}</div>
              @enderror
            </div>
          </div>
        </div> 
        <div class="row">
          <div class="col-sm-9">
            <div class="form-group">
              <label for="descricao_id" style="font-size: 1.2vw">Descrição</label>
              <select class="form-control @if($errors->any('descricao_id')) @if($errors->has('descricao_id')) is-invalid @else is-valid @endif @endif" id="descricao_id" name="descricao_id" value="{{$quartos->descricao_id}}">
                @foreach ($descricoes as $descricao)
                    <option value="{{$descricao->id}}">{{$descricao->descricao}}</option>
                @endforeach
            </select>
              @error('descricao_id')
                <div class="invalid-feedback">{{$errors->first('descricao_id')}}</div>
              @enderror
          </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label for="codigo" style="font-size: 1.2vw">Código</label>
              <input type="text" class="form-control @if($errors->any('codigo')) @if($errors->has('codigo')) is-invalid @else is-valid @endif @endif" id="codigo" name="codigo" value="{{$quartos->codigo}}" placeholder="Código" maxlength="4">
              @error('codigo')
                <div class="invalid-feedback">{{$errors->first('codigo')}}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="preco" style="font-size: 1.2vw">Preço</label>
              <input type="text" class="form-control @if($errors->any('preco')) @if($errors->has('preco')) is-invalid @else is-valid @endif @endif" id="preco" name="preco" value="{{$quartos->preco}}" placeholder="Preço">
              @error('preco')
                <div class="invalid-feedback">{{$errors->first('preco')}}</div>
              @enderror
          </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="localizacao_id" style="font-size: 1.2vw">Localização</label>
              <select class="form-control @if($errors->any('localizacao_id')) @if($errors->has('localizacao_id')) is-invalid @else is-valid @endif @endif" id="localizacao_id" name="localizacao_id" value="{{$quartos->localizacao_id}}">
                @foreach ($localizacoes as $localizacao)
                    <option value="{{$localizacao->id}}">{{$localizacao->localizacao}}</option>
                @endforeach
              </select>            
              @error('localizacao_id')
                <div class="invalid-feedback">{{$errors->first('localizacao_id')}}</div>
              @enderror
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <img src="/imagens/{{$quartos->imagem}}" class="img-fluid" alt="imagem">
          </div>
          <div class="col-sm-9">
            <br><br><br><br><br><br><br><br>
            <input type="file" class="form-control" id="imagem" name="imagem">
          </div>
        </div>
        <div class="form-group">
          <label for="disponibilidade_id" style="font-size: 1.2vw">Disponibilidade</label>
          <select class="form-control @if($errors->any('disponibilidade_id')) @if($errors->has('disponibilidade_id')) is-invalid @else is-valid @endif @endif" id="disponibilidade_id" name="disponibilidade_id" value="{{$quartos->disponibilidade_id}}">
            @foreach ($disponibilidades as $disponibilidade)
                <option value="{{$disponibilidade->id}}">{{$disponibilidade->disponibilidade}}</option>
            @endforeach
          </select>            
          @error('disponibilidade_id')
            <div class="invalid-feedback">{{$errors->first('disponibilidade_id')}}</div>
          @enderror
        </div>
        <br><br>
        <button type="submit" class="btn btn-dark" style="font-size: 1.3vw">Guardar</button>
        <a href="/Quartos" class="btn btn-dark" style="font-size: 1.3vw">Voltar</a>
    </form>
    <br>
</div>
@endsection