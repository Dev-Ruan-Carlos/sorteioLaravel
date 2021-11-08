@extends('layouts.app')
@section('body')
@method('POST')
<div class="fundo flex-jc flex-ac">
    <div class="escurecer white" id="fundo">
        <h1 class="flex-jc pt-1">Historico de sorteio</h1>
        <div class="flex-jb flex-c flex-jc w-100 pt-3 pl-5">
            <span class="flex-ac mb-2">* Só ficará no histórico sorteios que foram salvos</span>
            @foreach ($historico as $h)
                <span class="">{{"Número(s) sorteado(s): " . $h->numerosorteado}}</span>
                <span class="pt-05">{{"Data e hora de cadastro: " . $h->dataehoracadastro}}</span>
                <br>
            @endforeach
        </div>
        <div class="flex-jc pt-3 pb-3">
            <a href="{{route('inicio2')}}" class="bottonFinalResultado flex-jc">Voltar a tela inicial</a>
            <a href="{{route('salvar.gravar')}}" class="bottonFinalResultado flex-jc ml-2">Salvar Sorteio</a>
        </div>
    </div>
</div>
@endsection