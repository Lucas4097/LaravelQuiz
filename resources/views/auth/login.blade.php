<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("css/stylegeral.css") }}">
    <title>Login - Puzzle Brain</title>
    <link rel="icon" type="image/png" href="{{ asset("Midia/Img/puzzle-removebg-preview.png") }}"/>
</head>
<body class="bg-fundosite text-light">
    <div class="container">
        <form action="{{route("login")}}" method="POST">
            @csrf
            <div id="login">
                <h1 id="login_titulo" class="font-sigmar">Login</h1>

                @if ($errors->all())
                    <div id="login_erro" class="font-sigmar">
                        <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                @endif

                <input name="name" class="login_input" type="text" placeholder="Nome"><br><br>
                <input name="password" class="login_input" type="password" placeholder="Senha"><br><br>
                <button type="submit" id="login_botao">Logar-se</button>
                <div class="mt-4 float-end">
                    <a class="link-light" href="{{route("registerPage")}}">Quer se cadastrar?</a>
                </div>
                <div class="menu_login font-sigmar">
                    <button type="button" onclick="return confirm('Quer voltar para o menu?')" id="menuButton" class="btn btn-outline-light btn-lg bg-azulclaro borda-azul"><a href="/">Menu</a></button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
