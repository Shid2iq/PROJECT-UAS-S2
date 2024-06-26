<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    {{-- <img src="assets/img/cloudnime.png" style="width: 60px; height:60px; padding:10px; border-radius:50px;" alt=""> --}}
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/" style="font-size: 40px;">Cloudnime</a>
    
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
        
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                    <form action="{{Route('logout')}}" method="POST">
                    @csrf
                    <div style="margin-left: 45px;"><button type="submit" class="dropdown btn btn-success">Logout</button></div>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
