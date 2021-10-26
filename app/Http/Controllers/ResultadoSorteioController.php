<?php

namespace App\Http\Controllers;

use App\Models\Sorteio;
use Illuminate\Http\Request;

class ResultadoSorteioController extends Controller
{
    public function resultado(Request $request){
        $sorteio = new Sorteio();
        $arrayResultado = [];
        $primeiroNum = $request->get('primeiroNum');
        $segundoNum = $request->get('segundoNum');
        $quantidadeSorteado = $request->get('qntSorteado');
        for ($i=0; $i < $quantidadeSorteado; $i++) { 
            $encontrou = false;
            while ($encontrou == false) {
                $numeroSorteado = random_int($primeiroNum, $segundoNum);
                if (!in_array($numeroSorteado, $arrayResultado)) {
                    $arrayResultado[] = $numeroSorteado;
                    $encontrou = true;
                }
            }
        }
        sort($arrayResultado);
        return view('resultadosorteio', compact('arrayResultado'));
    }

    public function inicio(){
        return view('welcome');
    }
}
