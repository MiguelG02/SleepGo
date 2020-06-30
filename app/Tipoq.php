<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoq extends Model
{
    public function quartos()
    {
        return $this->hasMany(Quarto::class);
    }
}
