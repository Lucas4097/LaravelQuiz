@extends('Templates.layout')

@section('title', 'Dashboard')

@section('body')

<main class="container font-sigmar">

    @include('Templates.dashboardHeader')

    @include('components.success')
    
    <table class="table text-white fs-5">
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
            @forelse ($question as $question)
                <tr>
                    <th>{{ $question->id }}</th>
                    <td>{{ $question->question }}</td>
                    <td>{{ $question->answer1 }}</td>
                    <td>{{ $question->answer2 }}</td>
                    <td>{{ $question->answer3 }}</td>
                    <td>{{ $question->answer4 }}</td>
                    <td>
                        <a href=" {{route('dashboardEditPage', $question->id)}} " class="btn btn-success">Editar</a>
                        <form style="display: inline-block" class="m-0" action="{{ route('deleteQuestions', $question->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Excluir</button>

                        </form>
                    </td>
                </tr>

                @empty
                <tr>
                    <th class="text-center text-danger" colspan="7">Sem cadastrados!</th>
                </tr>
            @endforelse
        </tbody>
    </table>
</main>
@endsection
