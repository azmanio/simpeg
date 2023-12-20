<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(0, 0, 0, 0.2);">
    <a class="navbar-brand ml-2" href="{{ route('home') }}"><b>SIMPeg</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-3" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item pl-1">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fa-solid fa-gauge-high"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item pl-1">
                <a class="nav-link" href="{{ route('employees.index') }}">
                    <i class="fa-solid fa-users"></i>
                    Pegawai
                </a>
            </li>
            <li class="nav-item pl-1">
                <a class="nav-link" href="{{ route('departments.index') }}">
                    <i class="fa-solid fa-building"></i>
                    Departemen
                </a>
            </li>
            <li class="nav-item pl-1">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="fa-solid fa-user-gear"></i>
                    User
                </a>
            </li>
        </ul>
    </div>
    <a class="nav-item" style="color: rgba(0, 0, 0, 0.7)" href="{{ route('logout') }}">
        <i class="fa-solid fa-right-from-bracket"></i>
        Logout
    </a>
</nav>
