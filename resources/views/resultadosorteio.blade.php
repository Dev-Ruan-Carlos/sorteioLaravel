@extends('layouts.app')
@section('body')
<form action="{{route('salvar.gravar')}}" method="POST">
    @csrf
    @method('POST')
    <div class="fundo flex-jc flex-ac">
        <div class="escurecer white" id="fundo">
            <div class="flex-jc pt-5 resultados flex-c">
                <h1 class="white">Os números sorteados foram: </h1>
                <div class="flex-jc pt-2 pl-3">
                    @foreach ($arrayResultado as $resultado)
                        <div class="pr-3">
                            <span name="resultadoSorteio">{{$resultado}}</span>
                            <input type="text" name="resultadoSorteio[]" hidden value="{{$resultado}}">
                        </div>
                    @endforeach
                    <input type="text" hidden name="primeiroNum" value="{{$primeiroNum}}">
                    <input type="text" hidden name="segundoNum" value="{{$segundoNum}}">
                    <input type="text" hidden name="qntSorteado" value="{{$quantidadeSorteado}}">
                </div>
                <div class="pt-3 w-100 flex-ac flex-c">
                    <div class="flex-c">
                        <h1>Informações sobre o sorteio</h1>
                        <p class="pt-1">{{"Data do sorteio: "}}</p>
                        <p class="pt-1" id="date"></p>
                        <div class="flex-jb">
                            <p class="pt-1">Quantidade sorteada: </p>
                            <p class="pt-1">{{$quantidadeSorteado . " número(s)"}}</p>
                            <p class="pt-1">Sorteio entre: </p>
                            <p class="pt-1">{{$primeiroNum . " e " . $segundoNum}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-jc flex-ac flex-c w-100">
                <h1 class="pt-3">E agora o que gostaria de fazer ?</h1>
                <div class="flex-c w-100 flex-jc flex-ac">
                    <div class="pt-3 flex w-100 flex-jc flex-ac">
                        <a href="{{route('inicio2')}}" class="bottonFinalResultado flex-jc">Voltar a tela inicial</a>
                        <button type="submit" class="bottonFinalResultado black ml-1 flex-jc">Salvar sorteio</button>
                        <a href="{{route('historico')}}" class="bottonFinalResultado ml-1">Verificar histórico</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    var
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    h = n.getHours();
    me = n.getMinutes();
    s = n.getSeconds();
        document.getElementById("date").innerHTML = y + "/" + m + "/" + d + " " + h + ":" + me + ":" + s;
</script>
@endsection