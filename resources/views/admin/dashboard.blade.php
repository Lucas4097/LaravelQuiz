<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>Pergunta</th>
            <th>Resposta1</th>
            <th>Resposta2</th>
            <th>Resposta3</th>
            <th>Resposta4</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>Quanto é 1+1?</td>
            <td>{{ $question->answer1 }}</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>
                <button class="btn btn-success">Editar</button>
                <button class="btn btn-danger">Excluir</button>
            </td>
          </tr>
        </tbody>
      </table>
      <a href="{{ route("dashboardCreatePage")  }}">Cadastrar</a>
</body>
</html>
