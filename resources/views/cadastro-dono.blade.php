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


<form action="/cadastrar-dono" method="POST">

    @csrf
    <label for="">Nome</label>
    <br>
    <input type="text" name="nome" id="nome" >
    <br>

    <label for="">CPF</label>
    <br>
    <input type="text" name="cpf" id="cpf" >
    <br>

    <label for="">Endereço</label>
    <br>
    <input type="text" name="endereco" id="endereco" >


    <br>
    <br>
    <input type="submit" value="Enviar">
    <br>
    <br>
    <input type="reset" value="Limpar">


</form>
</body>
</html>
