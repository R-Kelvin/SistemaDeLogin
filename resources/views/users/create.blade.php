<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>Inicio</title>
</head>
<body>
    <div class="main-container">
    
        <header class="header">
            <div class="content-header">
                <h2 class="title-logo"><a href="{{ route('dashboard') }}">logo</a></h2>
            <ul class="list-nav-link">
                <li><a href="#" class="nav-link">Usuários</a></li>
                <li><a href="{{ route('dashboard') }}" class="nav-link">voltar</a></li>
            </ul>
            </div>

        </header>
            <div class="content">
                <div class="content-title">
                    <h1 class="page-title">Cadastrar usuário</h1>
                    <a href="#" class="btn-primary">Listar</a>
                </div>

        <!--verificao de confimaçao de cadastro paliativo-->

        @if (session('Sucesso'))
            <div class="alerta-success">
                {{ session('Sucesso') }}
            </div>
        @endif

        @if (session('Erro'))
            <div class="alert-error"> 
                {{ session('Erro') }}
            </div> 
        @endif

        <!------------------------------------------------->

    <form action="{{ route('user.store') }}" method="POST" class="form-container">
    @csrf
        <div class="mb-4">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" id="name" class="form-imput" placeholder="Digite seu nome completo" value="{{ old('name') }}" required><br><br>
        </div>

        <div class="mb-4">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" name="email" id="email" class="form-imput" placeholder="Digite seu email" value="{{ old('email') }}" required><br><br>    
        </div>

        <div class="mb-4">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" name="password" id="password" class="form-imput" placeholder="Digite sua senha" value="{{ old('password') }}" required><br><br>    
        </div>

        <button type="submit" class="btn-success">Cadastrar</button>

            </form>
        </div>
    </div>
    
</body>
</html>
