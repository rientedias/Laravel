<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('user.store')}}" method="post">
    @csrf
    <label for="">Nome do Usuario</label>
    <input type="text" name="name" placeholder="Nome Completo">

    <label for="">E-mail do Usuario</label>
    <input type="email" name="email" placeholder="exemplo@exp.com.br">

    <label>Senha do Usuario</label>
    <input type="password" name="password" placeholder="No minimo 8 caracteres">

    <input type="submit" value="Cadastrar">
</form>

</body>
</html>
