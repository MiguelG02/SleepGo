<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    protected $fillable = [
        'referencia', 'codigo','preco','imagem','localizacao_id','descricao_id','tipoqs_id'
    ];

    public function tipoqs()
    {
        return $this->belongsTo(Tipoq::class);
    }

    public function descricao()
    {
        return $this->belongsTo(Descricao::class);
    }

    public function localizacao()
    {
        return $this->belongsTo(Localizacao::class);
    }

    public function disponibilidade()
    {
        return $this->belongsTo(Disponibilidade::class);
    }
}
