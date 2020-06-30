<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    public function quartos()
    {
        return $this->hasMany(Quarto::class);
    }
}
