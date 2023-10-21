<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Blade</title>
</head>
<body>
<h1>{!! $welcome !!} {{ $client->name }}.</h1>
<style>
    .box-message {
        border-radius: 6px;
        padding: 10px;
        width: 100%;
        border: 1px solid red;
    }

    .error {
        border-color: darkred;
        color: darkred;
        background-color: red;
    }

    .info {
        border-color: darkblue;
        color: darkblue;
        background-color: blue;
    }
</style>

@php
    $error = true;
    $info = false;
@endphp

<div @class([
        'box-message',
        'error' => $error,
        'info' => $info,
])>
<p>Conteúdo de uma mensagem de alerta!</p>
</div>
@php
    $count = 1;
@endphp
@foreach($users as $user)

    @if($count % 2 === 0)
        <p>#{{ $count }} Linha par: O nome do usuário é: {{ $user->name }}</p>
    @else
        <p>#{{ $count }} Linha ímpar: O nome do usuário é: {{ $user->name }}</p>
    @endif

    @php
        $count++;
    @endphp
@endforeach


</body>
</html>
