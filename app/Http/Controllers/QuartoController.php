<?php

namespace App\Http\Controllers;

use App\Quarto; 
use App\Tipoq; 
use App\Descricao;
use App\Localizacao;
use App\Disponibilidade;
use Illuminate\Http\Request;

class QuartoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quartos = Quarto::all();
        return view('admin.Quartos.index')->with(compact('quartos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoquartos = Tipoq::all();
        $descricoes = Descricao::all();
        $localizacoes = Localizacao::all();
        $disponibilidades = Disponibilidade::all();
        return view('admin.Quartos.criar')->with(compact('tipoquartos', 'descricoes', 'localizacoes', 'disponibilidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipoQuarto' => 'required',
            'referencia' => 'required|unique:quartos',
            'codigo' => 'required',
            'descricao' => 'required',
            'localizacao' => 'required',
            'preco' => 'required',
            'imagem' => 'image|mimes:jpg,jpeg,png|max:5000',
            'disponibilidade' => 'required',
        ]);
        $data = $request->all();
        $quarto = new Quarto();
        $quarto->tipoqs_id = $data['tipoQuarto'];
        $quarto->referencia = $data['referencia'];
        $quarto->codigo = $data['codigo'];
        $quarto->descricao_id = $data['descricao'];
        $quarto->localizacao_id = $data['localizacao'];
        $quarto->preco = $data['preco'];
        $quarto->disponibilidade_id = $data['disponibilidade'];
        if ($request->has('imagem')) {
            $img= $request->file('imagem');
            $imgname = time() . '.' . $img->getClientOriginalExtension();
            $path = public_path("/imagens/");
            $img->move($path, $imgname);
            $quarto->imagem = $imgname;
        }
        $quarto->save();
        return redirect(route('Quartos.index'))->with('fm-success', 'Quarto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quartos = Quarto::findOrFail($id);
        $tipoquartos = Tipoq::all();
        $descricoes = Descricao::all();
        $localizacoes = Localizacao::all();
        $disponibilidades = Disponibilidade::all();
        return view('admin.Quartos.editar')->with(compact('quartos', 'tipoquartos', 'descricoes', 'localizacoes', 'disponibilidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        if ($request->has('imagem')) {
            $img= $request->file('imagem');
            $imgnome = time() . '.' . $img->getClientOriginalExtension();
            $path = public_path("/imagens/");
            $img->move($path, $imgnome);
            Quarto::Where(['id'=>$id])->update([
                'tipoqs_id'=> $data['tipoqs_id'],
                'referencia' => $data['referencia'],
                'codigo' => $data['codigo'],
                'descricao_id'=> $data['descricao_id'],
                'localizacao_id'=> $data['localizacao_id'],
                'preco'=> $data['preco'],
                'imagem'=> $imgnome,
                'disponibilidade_id' => $data['disponibilidade_id'],
            ]);
        }else{
            Quarto::Where(['id'=>$id])->update([
                'tipoqs_id'=> $data['tipoqs_id'],
                'referencia' => $data['referencia'],
                'codigo' => $data['codigo'],
                'descricao_id'=> $data['descricao_id'],
                'localizacao_id'=> $data['localizacao_id'],
                'preco'=> $data['preco'],
                'disponibilidade_id' => $data['disponibilidade_id'],
            ]);
        }
        return redirect('/Quartos')->with('fm-success', 'Quarto editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quarto::Where(['id'=>$id])->delete();
        return redirect('/Quartos')->with('fm-success', 'Quarto apagado com sucesso!');
    }
}