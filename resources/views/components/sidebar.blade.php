<nav class="navbar-dark col-3 col-xl-2 d-sm-block d-flex flex-column h-100 position-fixed shadow bg-dark" >
    <button class="btn btn-light collapsed tam d-sm-none" aria-controls="side" data-bs-target="#side" data-bs-toggle="collapse" id="tam">
        <span class="fas fa-align-justify"></span>
    </button>
    <ul class="nav flex-column collapse d-sm-block my-sm-5 " id="side">
        <li class="nav-item my-sm-3">
            <a  href="{{route('ficha.index')}}">
                <i class="fas fa-award"></i>Fichas
            </a>            
        </li>
        <li class="nav-item my-sm-3">
            <a href="{{route('programa.index')}}">
                <i class="fas fa-chalkboard"></i>Programas de formación
            </a>
        </li>
        <li class="nav-item my-sm-3">
            <a href="{{route('aprendiz.index')}}">
                <i class="fas fa-user-graduate"></i>Aprendices
            </a>
        </li>
        <li class="nav-item my-sm-3">
            <a href="{{route('instructor.index')}}">
                <i class="fas fa-chalkboard-teacher"></i>Instructores
            </a>
        </li>

    </ul>
</nav>
