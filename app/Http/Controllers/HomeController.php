<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Quarto;
use App\Reserva;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $quartos = Quarto::paginate(3);
        return view('private.index')->with(compact('quartos'));
    }

    public function minhasreservas()
    {
        $reservas = Reserva::all();
        return view('private.minhasreservas')->with(compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function reservar($id){
        $quartos = Quarto::findOrFail($id);
        $estado = Estado::all();
        return view('private.reservar')->with(compact('quartos', 'estado'));
    }


    /*public function create()
    {
        $quartos = Quarto::all();
        return view('private.reservar')->with(compact('quartos'));
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'diaReservaIni' => 'required|date|after:yesterday',
            'diaReservaFin' => 'required|date|after:diaReservaIni',
        ]);
        $data = $request->all();
        $reserva = new Reserva();
        $reserva->diaReservaIni = $data['diaReservaIni'];
        $reserva->diaReservaFin = $data['diaReservaFin'];
        $reserva->precoTotal = $data['precoTotal'];
        $reserva->estado_id = $data['estado'];
        $reserva->quarto_id = $data['idquarto'];
        $reserva->user_id = auth()->id();
        $reserva->save();
        return redirect(route('home.index'))->with('fm-success', 'Reserva efetuada com sucesso');
    }

    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$quartos = Quarto::findOrFail($id);
        return view('private.ver')->with(compact('quartos'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reserva::Where(['id'=>$id])->delete();
        return redirect('/minhasreservas')->with('fm-success', 'Reserva cancelada!');
    }
}
