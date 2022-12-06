<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste</title>
</head>
<body>


<form action="/editar-animal/{{ $dono->id }}" method="POST">

    @csrf
    @method("PUT")
    <label for="">Nome</label>
    <br>
    <input type="text" name="nome" id="nome" value="{{$dono->nome}}">
    <br>

    <label for="">CPF</label>
    <br>
    <input type="text" name="cpf" id="cpf" value="{{$dono->cpf}}">
    <br>

    <label for="">Endereço</label>
    <br>
    <input type="text" name="endereco" id="endereco" value="{{$dono->endereco}}">
    <br>

    <br>
    <input type="submit" value="Enviar">
    <br>
    <br>
    <input type="reset" value="Limpar">


</form>
</body>
</html>
