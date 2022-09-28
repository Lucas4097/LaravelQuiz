<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <section class="container">
        <div class="gap-2">
            <form action="{{route("createQuestions")}}" method="post">
                @csrf
                <input type="text" class="form-control my-2" name="question" placeholder="Pergunta">
                <input type="text" class="form-control my-2" name="answer1" placeholder="Resposta1">
                <input type="text" class="form-control my-2" name="answer2" placeholder="Resposta2">
                <input type="text" class="form-control my-2" name="answer3" placeholder="Resposta3">
                <input type="text" class="form-control my-2" name="answer4" placeholder="Resposta4">
                <input type="text" class="form-control my-2" name="answerTrue" placeholder="Resposta Correta">
                <button type="submit" class="btn btn-success float-end" name="submit">Enviar</button>
            </form>
            <a href="{{route("dashboardPage")}}">Painel</a>
        </div>
    </section>
</body>
</html>
