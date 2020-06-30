<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [
        'estado'
    ];

    public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }
}
