<?php

namespace App\Http\Controllers;

use App\Models\Sorteio;
use Illuminate\Http\Request;

class ResultadoSorteioController extends Controller
{
    public function resultado(Request $request){
        $arrayResultado = [];
        $primeiroNum = $request->get('primeiroNum');
        $segundoNum = $request->get('segundoNum');
        if($primeiroNum >= $segundoNum){
            $primeiroNum = "1";
        }
        $quantidadeSorteado = $request->get('qntSorteado');
        if($quantidadeSorteado >= 10){
            $quantidadeSorteado = "10";
        }
        $limit = 0;
        if($quantidadeSorteado > $primeiroNum && $quantidadeSorteado > $segundoNum){
            $quantidadeSorteado = "1";
        }
        for ($i=0; $i < $quantidadeSorteado; $i++) { 
            $encontrou = false;
            while ($encontrou == false && $limit < $quantidadeSorteado) {
                $numeroSorteado = random_int($primeiroNum, $segundoNum);
                if (!in_array($numeroSorteado, $arrayResultado)) {
                    $arrayResultado[] = $numeroSorteado;
                    $encontrou = true;
                }else{
                    $quantidadeSorteado++;
                    break;
                }
            }
        }
        sort($arrayResultado);
        return view('resultadosorteio', compact('arrayResultado', 'primeiroNum', 'segundoNum', 'quantidadeSorteado'));
    }

    public function inicio(){
        return view('welcome');
    }
}