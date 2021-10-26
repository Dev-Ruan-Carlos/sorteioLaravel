<?php

namespace App\Http\Controllers;

use App\Models\Sorteio;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function historico(){
        $historico = Sorteio::where('session', session()->getId())->get();
        return view('historico', compact('historico'));
    }
}
