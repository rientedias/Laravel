<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--Cadastro do usuario-->
<form action="{{route('users.edit',['user' => $user->id ])}}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Nome do Usuario</label>
    <input type="text" name="name" value="{{$user->name}}">

    <label for="">E-mail do Usuario</label>
    <input type="email" name="email" value="{{$user->email}}">

    <label>Senha do Usuario</label>
    <input type="password" name="password" value="">

    <input type="submit" value="Editar Usuario">

</form>

</body>
</html>
