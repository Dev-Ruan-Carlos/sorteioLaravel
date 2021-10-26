<?php

namespace App\Http\Controllers;

use App\Models\DadoSorteio;
use App\Models\Sorteio;
use Illuminate\Http\Request;

class GravarSorteioController extends Controller
{
    public function gravar(Request $request){
        $sorteio = new Sorteio();
        $sorteio->numerosorteado = implode(', ', $request->get('resultadoSorteio'));
        $sorteio->session = session()->getId();
        $sorteio->save();
        $sorteioDado = new DadoSorteio();
        $sorteioDado->qtdenumeros = $request->get('qntSorteado');
        $sorteioDado->numeroinicial = $request->get('primeiroNum');
        $sorteioDado->numerofinal = $request->get('segundoNum');
        $sorteio->dadosSorteio()->save($sorteioDado);
        return redirect()->route('inicio2', compact('sorteio', 'request'));
    }
}
