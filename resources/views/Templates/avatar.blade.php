<section id="avatar">
    <div class="dropdown">
        <button class="btn btn-secondary rounded dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person"
                viewBox="0 0 16 16">
                <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
            </svg>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('profilePage')}}">Editar Perfil</a></li>
            <li>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit">Deslogar</button>
                </form>
            </li>
        </ul>
    </div>
</section>
