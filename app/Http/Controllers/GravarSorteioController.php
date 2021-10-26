<?php

namespace App\Http\Controllers;

use App\Models\DadoSorteio;
use App\Models\Sorteio;
use Illuminate\Http\Request;

class GravarSorteioController extends Controller
{
    public function gravar(Request $request, $id){
        $dados = DadoSorteio::where('controle', $id)->get()->first();
        $sorteio = new Sorteio();
        $sorteio->numerosorteado = implode(', ', $request->get('resultadoSorteio'));
        $sorteio->iddadosorteio = $dados->controle;
        $sorteio->qtdenumeros = $request->get('qntSorteado');
        $sorteio->numeroinicial = $request->get('primeiroNum');
        $sorteio->numerofinal = $request->get('segundoNum');
        $sorteio->session = session()->getId();
        dd($sorteio);
        $sorteio->save();
        return redirect()->route('Sorteio.inicio', compact('sorteio', 'request'));
    }
}
