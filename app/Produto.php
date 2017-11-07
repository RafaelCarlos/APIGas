<?php

namespace APIGas;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

    //
    protected $fillable = [
        'nome',
        'descricao_produto',
        'valor_venda',
        'valor_minimo'];

    public function produto() {
        return $this->belongsTo('APIGas\Distribuidora');
    }

}
