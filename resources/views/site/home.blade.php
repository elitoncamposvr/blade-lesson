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
        border: 1px solid;
    }

    .error {
        border-color: #ef4444;
        color: white;
        background: palevioletred;
    }

    .info {
        background-color: darkblue;
        color: darkblue;
        background-color: lightskyblue;
    }
</style>

@php
    $error = true;
    $info = false;
@endphp

<div @class([
        'box-message',
        'error' => $error,
        'info' => $info
])>
    <p>Conteúdo de uma mensagem de alerta!</p>
</div>

<div class="box-message {{ $error === true ? 'error'  : '' }}">
    <p>Conteúdo de uma mensagem de alerta!</p>
</div>

@php
    $enrollments[] = 'Matrícula 1';
    $enrollments[] = 'Matrícula 2';
    $enrollments[] = 'Matrícula 3';
@endphp

@foreach($users as $user)
    <div style="background: #e5e7eb; padding: 20px; margin-bottom: 20px;">
        @if($loop->even)
            <p>#{{ $loop->iteration }} Linha par: O nome do usuário é: {{ $user->name }}</p>
        @else
            <p>#{{ $loop->iteration }} Linha ímpar: O nome do usuário é: {{ $user->name }}</p>
        @endif

        @foreach($enrollments as $enrollment)
            <div style="background: aquamarine; margin-bottom: 10px;">
                @if($loop->parent->index === 1 && $loop->iteration === 3)
                    <p style="background-color:blue;">Está matriculado no curso: {{ $enrollment }}</p>
                @else
                    <p>Está matriculado no curso: {{ $enrollment }}</p>
                @endif
            </div>
        @endforeach
    </div>
@endforeach


</body>
</html>
