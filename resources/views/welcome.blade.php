@extends('layouts.app')
@section('body')
<form action="{{route('Sorteio.resultado')}}" method="POST" class="fundo white flex-jc flex-ac">
    @error('login')
        <span class="error">{{$message}}</span>
    @enderror
    @csrf
    @method('POST')
    @error('inicio')
        <div class="alert mt-05">
            <button type="button" onclick="fecharMensagem(this)" class="white mensagemError">x</button>
            <span>{{$message}}</span>
        </div>
    @enderror 
    <div class="escurecerResultado flex-jc">
        <div class="borda">
            <div class="flex-jc flex-ac pt-5">
                <h1 class="spanSorteio">Sorte a dor.com.br</h1>
            </div>
            <div class="flex-jc pt-7 pr-1">
                <span class="pr-2 spanSorteio">Sortear</span>
                <input type="number" class="inputSorteio black" name="qntSorteado" id="qntSorteado" value="1" min="1" max="100" required autofocus>
                <span class="pr-2 pl-2 spanSorteio">número(s)</span>
                <span class="pr-3 spanSorteio">entre</span>
                <input type="number" class="inputSorteio black" id="primeiroNum" min="1" max="100" name="primeiroNum" required>
                <span class="pr-3 pl-3 spanSorteio">e</span>
                <input type="number" class="inputSorteio black" id="segundoNum" min="1" max="100" maxlength="3" name="segundoNum" required>
            </div>
            <div class="flex-jc pt-3 w-100">
                <input type="checkbox" id="ordemCrescente" class="ordemCrescente black" name="ordemCrescente" value="marcado">
                <label for="ordemCrescente" style="font-size: 18px;">Mostrar o resultado em ordem crescente!</label>
            </div>
            <div class="bottonSorteio flex-jc pt-2">
                <button type="submit" id="sortear" class="sortearAgora black">Sortear agora</button>
            </div>
        </div>
    </div>
</form>
<script>
    
    let getQuantidade  = document.getElementById('qntSorteado');
    let getPrimeiroNum = document.getElementById('primeiroNum');
    let getSegundoNum  = document.getElementById('segundoNum');
    let getSorteio     = document.getElementById('sortear');
    let resultado      = parseInt(getSegundoNum.value) - parseInt(getPrimeiroNum.value);

        getSorteio.addEventListener('blur', function(){
            if( getQuantidade.value > resultado ){
                alert('Quantidade de números sorteados não permitido');
            }
        });

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

        function fecharMensagem(el){
            el.closest('.alert').remove();
        }
</script>
@endsection