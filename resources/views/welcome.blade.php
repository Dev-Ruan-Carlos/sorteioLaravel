@extends('layouts.app')
@section('body')
<form action="{{route('Sorteio.resultado')}}" method="POST" class="fundo white flex-jc flex-ac">
    @csrf
    @method('POST')
    @error('inicio2')
        <span class="alert">{{$message}}</span>
    @enderror 
    <div class="escurecerResultado flex-jc">
        <div class="borda">
            <div class="flex-jc flex-ac pt-5">
                <h1 class="spanSorteio">Sorte a dor.com.br</h1>
            </div>
            <div class="flex-jc pt-7 pr-1">
                <span class="pr-2 spanSorteio">Sortear</span>
                <input type="number" class="inputSorteio black" name="qntSorteado" id="qntSorteado" value="1" min="1" max="10" required onfocus="this.selectionStart = this.selectionEnd = this.value.length;" autofocus="true">
                <span class="pr-2 pl-2 spanSorteio">número(s)</span>
                <span class="pr-3 spanSorteio">entre</span>
                <input type="number" class="inputSorteio black" id="primeiroNum" min="1" max="100" name="primeiroNum" required>
                <span class="pr-3 pl-3 spanSorteio">e</span>
                <input type="number" class="inputSorteio black" id="segundoNum" min="1" max="100" maxlength="3" name="segundoNum" required>
            </div>
            <div class="bottonSorteio flex-jc pt-6">
                <button type="submit" class="sortearAgora black">Sortear agora</button>
            </div>
        </div>
    </div>
</form>
<script>
    var
        getQuantidade  = document.getElementById('qntSorteado');
        getPrimeiroNum = document.getElementById('primeiroNum');
        getSegundoNum  = document.getElementById('segundoNum');

        getQuantidade.addEventListener('blur', function(){
            if(this.value <= 0){
                this.value = 1;
                alert('Quantidade deve ser maior que zero');
            }
        });

        getPrimeiroNum.addEventListener('blur', function(){
            if(this.value <= 0){
                this.value = 1;
                alert('Quantidade deve ser maior que zero');
            }
        });

        getSegundoNum.addEventListener('blur', function(){
            if(this.value <= 0){
                this.value = 1;
                alert('Quantidade deve ser maior que zero');
            }
        });

</script>
@endsection