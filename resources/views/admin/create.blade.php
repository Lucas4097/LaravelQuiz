@extends('Templates.layout')

@section('title', 'Dashboard - Create')

@section('body')

    <section class="container font-sigmar">

        @include('Templates.dashboardHeader')

        @include('components.success')

        <div class="mt-4 d-flex justify-content-center">

            <form style="width: 750px;" class="mt-4 p-2 border border-2 border-primary bg-primary" action="{{route("createQuestions")}}" method="post">
                @csrf
                <div class="mb-2">
                    <input type="text" class="form-control" name="question" placeholder="Pergunta">
                    <label for="question">Questão</label>
                </div>
                <input type="text" class="form-control my-2" name="answer1" placeholder="Resposta1">
                <input type="text" class="form-control my-2" name="answer2" placeholder="Resposta2">
                <input type="text" class="form-control my-2" name="answer3" placeholder="Resposta3">
                <input type="text" class="form-control my-2" name="answer4" placeholder="Resposta4">
                <input type="text" class="form-control my-2" name="answerTrue" placeholder="Resposta Correta">
                <button type="submit" class="btn btn-success w-100" name="submit">Cadastrar</button>
            </form>

        </div>
    </section>
@endsection
