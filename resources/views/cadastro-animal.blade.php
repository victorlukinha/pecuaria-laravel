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


<form action="/cadastrar-animal" method="POST">

    @csrf
    <label for="">ID do Dono</label>
    <br>
    <input type="number" name="donoId" id="donoId">
    <br>

    <label for="">Tag do Animal</label>
    <br>
    <input type="number" name="tagAnimal" id="tagAnimal">
    <br>

    <label for="">Peso do Animal</label>
    <br>
    <input type="number" name="peso" id="peso">
    <br>

    <label for="">Preço do animal</label>
    <br>
    <input type="text" name="preco" id="preco">
    <br>
    <br>
    <input type="submit" value="Enviar">
    <br>
    <br>
    <input type="reset" value="Limpar">


</form>
</body>
</html>
