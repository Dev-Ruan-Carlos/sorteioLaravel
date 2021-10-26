@extends('layouts.app')
@section('body')
<form action="{{route('Sorteio.resultado')}}" method="POST" class="fundo white flex-jc flex-ac">
    @csrf
    @method('POST')
    <div class="escurecer flex-jc">
        <div class="borda">
            <div class="flex-jc flex-ac pt-7">
                <h1 class="spanSorteio">Sorte a dor.com.br</h1>
            </div>
            <div class="flex-jc pt-7 pl-3">
                <span class="pr-2 spanSorteio">Sortear</span>
                <input type="number" class="inputSorteio black" name="qntSorteado" id="qntSorteado" min="1" max="5" required autofocus>
                <span class="pr-2 pl-2 spanSorteio">número(s)</span>
            </div>
            <div class="flex-jc pt-6">
                <span class="pr-3 spanSorteio">Entre</span>
                <input type="number" class="inputSorteio black" min="1" max="100" name="primeiroNum" required>
                <span class="pr-3 pl-3 spanSorteio">e</span>
                <input type="number" class="inputSorteio black" min="1" max="100" maxlength="3" name="segundoNum" required>
            </div>
            <div class="bottonSorteio flex-jc pt-6">
                <button type="submit" class="sortearAgora black">Sortear agora</button>
            </div>
        </div>
    </div>
</form>
@endsection