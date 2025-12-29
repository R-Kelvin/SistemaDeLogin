<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Cadastrar usuário</h1>

    <form action="{{ route('user.store') }}" method="POST">
    @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" placeholder="Digite seu nome completo" value="{{ old('name') }}" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" placeholder="Digite seu email" value="{{ old('email') }}" required><br><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" placeholder="Digite sua senha" value="{{ old('password') }}" required><br><br>

        <button type="submit">Cadastrar</button>

    </form>
</body>
</html>
