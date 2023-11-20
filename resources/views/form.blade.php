<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Form</title>
</head>
<body>

<form action="form/send" method="post">
    @csrf
    <div>
        <input type="checkbox" name="check" @checked($terms)> Aceitar os termos de uso!
    </div>

    <div>
        <label for="name">Nome do usuário:</label>
        <input type="text" name="name" id="name" value="Eliton Dev" @disabled($isAdmin === false)>
    </div>

    <div>
        <label for="email">E-mail do usuário:</label>
        <input type="text" name="email" id="email" value="eliton@7upweb.com.br" @readonly($isAdmin === false)>
    </div>

    <div>
        <label for="password">Senha do usuário:</label>
        <input type="password" name="password" id="password" value="123" @required($isAdmin === false)>
    </div>

    <div>
        <label for="versions">Versão do PHP</label>
        <select name="versions" id="versions">
            @foreach($versions as $version)
                <option value="{{ $version }}" @selected($version === $versionApp)>{{ $version }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <input type="submit" value="Enviar Formulário">
    </div>
</form>

</body>
</html>
