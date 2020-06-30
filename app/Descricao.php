<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descricao extends Model
{
    public function quartos()
    {
        return $this->hasMany(Quarto::class);
    }
}
