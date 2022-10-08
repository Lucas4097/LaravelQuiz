@extends('Templates.layout')

@section('title', 'Dashboard - Edit')

@section('body')

    <main class="container font-sigmar">

        @include('Templates.dashboardHeader')

        @include('components.success')

        @include('components.fail')

        <section class="mt-2">
            <div class="mt-4 d-flex justify-content-center">
                @foreach ($question as $question)
                    <form style="width: 750px;" class="mt-4 p-2 border border-2 border-primary bg-primary" action="{{route("editQuestions", $question->id)}}" method="post">
                        @csrf

                        <div class="mb-2">
                            <input type="text" class="form-control" name="question" placeholder="Pergunta" value="{{$question->question}}">
                            <label for="question">Questão</label>
                        </div>
                        <input type="text" class="form-control my-2" name="answer1" placeholder="Resposta1" value="{{$question->answer1}}">
                        <input type="text" class="form-control my-2" name="answer2" placeholder="Resposta2" value="{{$question->answer2}}">
                        <input type="text" class="form-control my-2" name="answer3" placeholder="Resposta3" value="{{$question->answer3}}">
                        <input type="text" class="form-control my-2" name="answer4" placeholder="Resposta4" value="{{$question->answer4}}">
                        <input type="text" class="form-control my-2" name="answerTrue" placeholder="Resposta Correta" value="{{$question->answerTrue}}">
                        <button type="submit" class="btn btn-success w-100" name="submit">Editar</button>
                    </form>
                @endforeach
            </div>
        </section>

    </main>
@endsection


