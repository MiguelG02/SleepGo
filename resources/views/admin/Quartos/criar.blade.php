@extends('admin.Layouts.home')

@section('content')
<br>
    <div class="container">
        <h1 style="font-size: 2vw">Adicionar Quarto</h1>
        <br>
        <form action="/Quartos" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="tipoQuarto" style="font-size: 1.3vw">Tipo de Quarto</label>
                        <select class="form-control" id="tipoQuarto" name="tipoQuarto">
                            @foreach ($tipoquartos as $tipoquarto)
                                <option value="{{$tipoquarto->id}}">{{$tipoquarto->tipoQuarto}}</option>
                            @endforeach
                        </select>
                        @error('tipoQuarto')
                            <div class="invalid-feedback">{{$errors->first('tipoQuarto')}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="referencia" style="font-size: 1.3vw">Referencia</label>
                        <input type="number" class="form-control" id="referencia" name="referencia">
                        @error('referencia')
                            <div class="invalid-feedback">{{$errors->first('referencia')}}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label for="descricao" style="font-size: 1.3vw">Descrição</label>
                        <select class="form-control" id="descricao" name="descricao">
                            @foreach ($descricoes as $descricao)
                                <option value="{{$descricao->id}}">{{$descricao->descricao}}</option>
                            @endforeach
                        </select>
                        @error('descricao')
                            <div class="invalid-feedback">{{$errors->first('descricao')}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="codigo" style="font-size: 1.3vw">Código</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" maxlength="4">
                        @error('codigo')
                            <div class="invalid-feedback">{{$errors->first('codigo')}}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="preco" style="font-size: 1.3vw">Preço</label>
                        <input type="number" class="form-control" id="preco" name="preco">
                        @error('preco')
                            <div class="invalid-feedback">{{$errors->first('preco')}}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="localizacao" style="font-size: 1.3vw">Localização</label>
                        <select class="form-control" id="localizacao" name="localizacao">
                            @foreach ($localizacoes as $localizacao)
                                <option value="{{$localizacao->id}}">{{$localizacao->localizacao}}</option>
                            @endforeach
                        </select>
                        @error('localizacao')
                            <div class="invalid-feedback">{{$errors->first('localizacao')}}</div>
                        @enderror
                    </div>
                </div>
            </div>  
            <div class="form-group">
                <label for="imagem" style="font-size: 1.3vw">Imagem</label>
                <input type="file" class="form-control" id="imagem" name="imagem">
                @error('imagem')
                    <div class="invalid-feedback">{{$errors->first('imagem')}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="disponibilidade" style="font-size: 1.3vw">Disponibilidade</label>
                <select class="form-control" id="disponibilidade" name="disponibilidade">
                    @foreach ($disponibilidades as $disponibilidade)
                        <option value="{{$disponibilidade->id}}">{{$disponibilidade->disponibilidade}}</option>
                    @endforeach
                </select>
                @error('disponibilidade')
                    <div class="invalid-feedback">{{$errors->first('disponibilidade')}}</div>
                @enderror
            </div>
            <br><br>
            <button type="submit" class="btn btn-dark" style="font-size: 1.3vw">Criar</button>
            <a href="/Quartos" class="btn btn-dark ml-2" style="font-size: 1.3vw">Voltar</a>
        </form>
        <br>
    </div>
@endsection