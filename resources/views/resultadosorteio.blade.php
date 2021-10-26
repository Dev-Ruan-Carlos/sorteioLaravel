@extends('layouts.app')
@section('body')
<form action="{{route('salvar.gravar')}}" method="POST">
    @csrf
    @method('POST')
    <div class="fundo flex-jc flex-ac">
        <div class="escurecer white" id="fundo">
            <div class="flex-jc pt-5 resultados flex-c">
                <h1 class="white">Os números sorteados foram: </h1>
                <div class="flex-jc pt-5 pl-2">
                    @foreach ($arrayResultado as $resultado)
                        <div class="pr-3">
                            <span name="resultadoSorteio">{{$resultado}}</span>
                            <input type="text" name="resultadoSorteio[]" hidden value="{{$resultado}}">
                        </div>
                    @endforeach
                </div>
                <div class="pt-5">
                    <h1>Informações sobre o sorteio</h1>
                    <div>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="flex-jc flex-ac flex-c w-100">
                <h1 class="pt-6">E agora o que gostaria de fazer ?</h1>
                <div class="flex-c w-100 flex-jc flex-ac">
                    <div class="pt-3 flex w-100 flex-jc flex-ac">
                        <a href="" class="bottonFinalResultado flex-jc">Voltar a tela inicial</a>
                        <a href="" class="bottonFinalResultado ml-1 flex-jc">Sortear novamente</a>
                        <button type="submit" class="bottonFinalResultado black ml-1 flex-jc">Salvar sorteio</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection