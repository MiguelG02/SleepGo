<?php

namespace App\Http\Controllers;

use App\Descricao;
use Illuminate\Http\Request;

class DescricoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desc=Descricao::paginate(5);
        $cr_ed=0;
        return view('admin.Descricoes.index')->with(compact('desc','cr_ed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Descricoes.index');
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
            'descricao' => 'required',
        ]);
        $data = $request->all();
        $desc = new Descricao;
        $desc->descricao = $data['descricao'];
        $desc->save();
        return redirect('/Descricoes')->with('fm-success', 'Registo criado com sucesso');
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
        $desc=Descricao::paginate(5);
        $desc_edit =Descricao::findOrFail($id);
        $cr_ed=1;
        return view('admin.Descricoes.index')->with(compact('desc','desc_edit','cr_ed'));
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
        $request->validate([
            'descricao' => 'required',
        ]);
        
         $data = $request->all();
         Descricao::Where(['id'=>$id])->update([
                'descricao' =>$data['descricao'],
            ]);
        return redirect('/Descricoes')->with('fm-success', 'Post alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Descricao::Where(['id'=>$id])->delete();
        return redirect('/Descricoes')->with('fm-success', 'Post eliminado com sucesso');
    }
}
