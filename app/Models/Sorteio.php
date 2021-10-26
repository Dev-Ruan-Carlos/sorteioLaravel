<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorteio extends Model
{
    protected $table = 'tsorteio';
    protected $primaryKey = 'controle';
    protected $connection = 'criador';
    public $timestamps = false;

    public function dadosSorteio() {
        return $this->hasOne('App\Models\DadoSorteio', 'codsorteio', 'controle');
    }  
}
