<?php

namespace App\Http\Controllers;

use App\Models\Sorteio;
use Illuminate\Http\Request;

class ResultadoSorteioController extends Controller
{
    public function resultado(Request $request){
        $arrayResultado     = [];
        $primeiroNum        = $request->get('primeiroNum');
        $segundoNum         = $request->get('segundoNum');
        $quantidadeSorteado = $request->get('qntSorteado');
        $ordenacao          = $request->get('ordemCrescente');
        $limit              = 0;
        for ($i=0; $i <= $quantidadeSorteado; $i++) { 
            $encontrou = false;
            while ($encontrou == false) {
                if( $quantidadeSorteado <= $segundoNum  && $primeiroNum <= $segundoNum ){
                    $numeroSorteado = random_int($primeiroNum, $segundoNum);
                }else{
                    return redirect()->back()->withInput()->withErrors(['inicio' => 'Não foi possível sortear pois alguma informação está incorreta']);
                    break;
                }
                if (!in_array($numeroSorteado, $arrayResultado)) {
                    $arrayResultado[] = $numeroSorteado;
                    $encontrou        = true;
                    $limit++;
                }else{
                    $quantidadeSorteado++;
                    break;
                }
            }
        }
        if( $request->ordemCrescente == 'marcado' ){
            sort($arrayResultado);
            return view('resultadosorteio', compact('arrayResultado', 'primeiroNum', 'segundoNum', 'quantidadeSorteado', 'ordenacao'));
        }else{
            $arrayResultado;
            return view('resultadosorteio', compact('arrayResultado', 'primeiroNum', 'segundoNum', 'quantidadeSorteado', 'ordenacao'));
        }
    }

    public function inicio(){
        return view('welcome');
    }
}