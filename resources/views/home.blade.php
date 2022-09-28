<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/stylegeral.css">
    <link rel="stylesheet" href="../CSS/button.css">

</head>
<body class="font-sigmar bg-fundosite">
    <div class="container mt-4">
        <div menu>
            <h1 class="text-center my-3 text-light">Puzzle Brain Usuario: {{  Auth::user()->name  }}</h1>
            <p class="text-center my-3 text-light">Puzzle Brain é um jogo educacional desenvolvido por estudantes do ensino médio do IF-Sertão.
                Seu Objetivo é ensinar os estudantes e público em geral, conceitos importantes de História, Matemática e Português, que posteriormente, poderá
                ajuda-lós em trabalhos escolares e até mesmo, no mercado de trabalho.
            </p>
            <p class="text-center my-3 text-light"> Para jogar, é preciso apenas utilizar o toque no celular e no computador, o mouse.
                São 10 rodadas com 4 alternativas, mas apenas uma é a correta. É permitido 1 tentativa por vez em cada pergunta por rodada.
            </p>
        </div>
        <div class="my-4 btn-group my-5 d-flex align-content-center justify-content-center gap-1">
            <a class="btn btn-primary bg-botao-versao2 btn btn-outline-light btn-lg" href="game">Iniciar jogo</a>
            <a class="btn btn-primary bg-botao-versao2 btn btn-outline-light btn-lg" href="ranking">Ranking</a>
            <a class="btn btn-primary bg-botao-versao2 btn btn-outline-light btn-lg" href="{{route("registerPage")}}">Cadastro</a>
            <a class="btn btn-primary bg-botao-versao2 btn btn-outline-light btn-lg" href="{{route("loginPage")}}">Login</a>
            <form action="{{route("logout")}}" method="post">
                @csrf
                <button class="btn btn-primary bg-botao-versao2 btn btn-outline-light btn-lg" type="submit">Sair</button>
            </form>
        </div>
    </div>
</body>
</html>

