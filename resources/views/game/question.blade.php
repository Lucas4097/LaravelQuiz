<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Puzzle Brain</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset("css/stylegeral.css")  }}">
  <link rel="icon" type="image/png" href="..\Midia\Img\puzzle-removebg-preview.png" />
</head>

<body class="bg-fundosite p-2 font-sigmar">
    <section id="corpo_game" class="container text-light">
        <header>
            @dd(session('success'))
            @include('components.success')
            <h1 class="text-center">Puzzle Brain</h1>
        </header>
        <main>
            <form action="{{route('verificQuestion')}}" method="post" class="card border-0 bg-transparent">
                @csrf
                <div class="card-body borda-azul bg-azulclaro p-4 row">

                    <div class="lead">
                        <p>Questão: {{$level}}/10</p>
                        <p>Pergunta: {{$question->question}} </p>
                        <p>Pontuação: {{$score}}</p>
                    </div>

                </div>

                <div class="btn-group my-5" role="group" aria-label="Basic radio toggle button group">

                    @php
                        $resp = [$question->answer1, $question->answer2, $question->answer3, $question->answer4];
                    @endphp

                    @foreach ($resp as $key => $resp)
                        @if ($resp != null)
                            <input type="radio" value="{{$resp}}" class="btn-check" name="answer" id="btnradio{{$key+1}}" autocomplete="off" >
                            <label class="btn btn-outline-primary" for="btnradio{{$key+1}}">{{$resp}}</label>
                        @endif
                    @endforeach

                </div>

                <div class="my-2 d-flex align-content-center justify-content-end flex-wrap gap-1">

                    <input type="hidden" name="id" value="{{$question->id}}">
                    <input type="hidden" name="level" value="{{$level}}">
                    <input type="hidden" name="score" value="{{$score}}">

                    <button type="submit" value="" name="submit" class="bg-azulclaro borda-azul btn btn-outline-light btn-lg" id="botaoSubmit">Responder</button>
                    <div class="col-sm-auto">
                      <button type="button" onclick="return confirm('Quer voltar para o menu? Seu jogo atual será perdido!')" id="menuButton" class="btn btn-outline-light btn-lg bg-azulclaro borda-azul"><a href="..\HTML\start.html">Menu</a></button>
                      <button type="button" onclick="return confirm('Quer deslogar de sua conta?')" id="sairButton" class="btn btn-outline-light btn-lg bg-azulclaro borda-azul"><a href="..\PHP\logout.php">Sair</a></button>
                    </div>
                </div>
            </form>
        </main>
    </section>

    <script src="..\JS\fade.js"></script>
    <script src="..\JS\sonsEfeitos.js"></script>
    <script src="..\JS\teste.js"></script>
</body>

</html>
