<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadoSorteio extends Model
{
    protected $table = 'tsorteiodado';
    protected $primaryKey = 'controle';
    protected $connection = 'criador';
    public $timestamps = false;

    public function sorteio() {
        return $this->belongsTo('App\Models\Sorteio', 'codsorteio', 'controle');
    }  
}
