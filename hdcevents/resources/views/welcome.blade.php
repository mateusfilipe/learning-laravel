<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Algum título</h1>
        <img width="20%" src='/img/squirtle.png' alt='Squirtle'>
        @if(10 > 11)
            <p>A condição é true</p>
        @endif
        @if($nome =="Pedro")
        <p>Oi Pedro!</p>
        @elseif($nome == "Mateus")
        <p>Oi Mateus! Você tem {{$idade}} anos e é {{$profissao}}</p>
        <p>Oi Mateus! Você tem {{$idade}} anos e é {{$profissao}}</p>
        @else
        <p>Oi estranho!</p>
        @endif
        <p>Oi Pedro!</p>
        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]*10}} - {{$i}}</p>
            @if($i%2==0)
            <p>Index Par!</p>
            @endif
        @endfor

        @foreach ($nomes as $nome)
            <p>{{$loop->index}}</p>
            <p>{{$nome}}</p>
        @endforeach

        @php
            $name = 'João';
            echo $name;
        @endphp
        {{-- Aopa --}}
    </body>
</html>
