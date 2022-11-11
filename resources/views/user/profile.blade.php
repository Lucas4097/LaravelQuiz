@extends('Templates.layout')

@section('title', 'Profile')

@section('body')

    <section class="d-flex justify-content-center mb-4 text-light mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="280" height="280" fill="currentColor" class="bi bi-person border border-2 rounded-circle p-2"
            viewBox="0 0 16 16">
            <path
                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
        </svg>
    </section>

    <section class="container p-2 border border-4 border-success rounded bg-secondary">
        <form action="" method="post" class="text-light">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <div id="submitPerfil">
                <button type="submit" class="btn btn-success w-100">Enviar</button>
            </div>
        </form>
    </section>

    <div class="d-flex justify-content-end">
        <button class="btn btn-warning">Menu</button>
    </div>

@endsection
