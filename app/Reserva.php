<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'diaReservaIni','diaReservaFin','precoTotal','estado_id','quarto_id','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function quarto()
    {
        return $this->belongsTo(Quarto::class);
    }
}
