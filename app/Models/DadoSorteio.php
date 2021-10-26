<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadoSorteio extends Model
{
    protected $table = 'tdadosorteio';
    protected $primaryKey = 'controle';
    protected $connection = 'criador';
    public $timestamps = false;

    public function ligSorteio() {
        return $this->hasOne('App\Models\Sorteio', 'iddadosorteio', 'controle');
    }  
}
