<header class="text-center text-white">
    <h1>Dashboard - Puzzle Brain</h1>
    <div class="dropdown d-flex justify-content-end mt-2 mb-4">
        <form action="{{route('dashboardPage')}}" method="get" class="d-flex m-0 me-3">
            <input name="search" class="form-control" type="text" name="" id="" placeholder="search">
            <button class="btn btn-secondary ms-1" type="submit">Search</button>
        </form>
        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Administrador
        </button>
        <ul class="dropdown-menu bg-primary text-white">
        <li><a class="dropdown-item" href="{{ route('dashboardCreatePage') }}">Cadastrar</a></li>
        <li><a class="dropdown-item" href="{{ route('dashboardPage') }}">Painel</a></li>
        <li>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button class="dropdown-item" type="submit">Deslogar</button>
            </form>
        </li>
        </ul>
    </div>
</header>
