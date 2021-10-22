@extends('layouts.app')
@section('body')
    <div class="fundo" id="fundo" style="background-image: url('{{asset("img/background.png")}}')">
        @php
            // $numero = count(3);
            $min = 1;
            $max = 100;
            $gera = rand($min,$max);
            dd($gera);
        @endphp
    </div>
@endsection