<?php

namespace App\Http\Controllers;

use App\Reserva;
use App\Estado;
use Illuminate\Http\Request;
use \App\Mail\SendMail;
use Illuminate\Support\Facades\Auth;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::all();
        return view('admin.reservas')->with(compact('reservas'));
    }

    public function confirmadas()
    {
        $reservas = Reserva::all();
        return view('admin.reservasconfirmadas')->with(compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $reservas = Reserva::findOrFail($id);
        $estado = Estado::all();
        return view('admin.confirmacao')->with(compact('reservas', 'estado'));
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
        $reservas = Reserva::findOrFail($id);
        $data = $request->all();
        Reserva::Where(['id'=>$id])->update([
            'estado_id'=> $data['estado_id'],
        ]);
        $details = [
            'title' => 'Confirmação da reserva',
            'body' => 'A sua reserva para foi confirmada. Obrigado por ter escolhido as nossas instalações e esperemos que tenha uma boa estadia de forma diferente.',
        ];
        $preco = [
            'preco' => 'Preço Total: ' . $reservas->precoTotal . '€',
        ];
        $codigo = [
            'codigo' => 'Código de acesso ao seu quarto: ' . $reservas->quarto->codigo,
        ];
        $user = $reservas->user->email;
        \Mail::to($user)->send(new \App\Mail\SendMail($details, $preco, $codigo));
        return redirect('/reservas')->with('fm-success', 'Reserva confirmada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
