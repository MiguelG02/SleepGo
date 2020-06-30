<?php

namespace App\Http\Controllers;

use App\Tipoq;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo=Tipoq::paginate(5);
        $cr_ed=0;
        return view('admin.Tipos.index')->with(compact('tipo','cr_ed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Tipos.index');
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
        ]);
        $data = $request->all();
        $tipo = new Tipoq;
        $tipo->tipoQuarto = $data['tipoQuarto'];
        $tipo->save();
        return redirect('/Tipos')->with('fm-success', 'Registo criado com sucesso');
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
        $tipo=Tipoq::paginate(5);
        $tp_edit =Tipoq::findOrFail($id);
        $cr_ed=1;
        return view('admin.Tipos.index')->with(compact('tipo','tp_edit','cr_ed'));
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
            'tipoQuarto' => 'required',
        ]);
        
         $data = $request->all();
         Tipoq::Where(['id'=>$id])->update([
                'tipoQuarto' =>$data['tipoQuarto'],
            ]);
        return redirect('/Tipos')->with('fm-success', 'Post alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tipoq::Where(['id'=>$id])->delete();
        return redirect('/Tipos')->with('fm-success', 'Post eliminado com sucesso');
    }
}
