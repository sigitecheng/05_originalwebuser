<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
        <a class="navbar-brand" href="#">
            <h4>PJA X EMAKI</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">

                    <a class=" mx-1 nav-link <?= ($active === "home") ? 'active' : ''; ?>" aria-current="page" href="/"><i class="fas fa-home"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class=" mx-1 nav-link <?= ($active === "about") ? 'active' : ''; ?>" aria-current="page" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class=" mx-1 nav-link <?= ($active === "posts") ? 'active' : ''; ?>" aria-current="page" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class=" mx-1 nav-link <?= ($active === "categories") ? 'active' : ''; ?>" aria-current="page" href="/categories">Categories</a>
                </li>
            </ul>

            <!-- ## PENGGUNAAN FITUR MIDLE WARE UNTUK LOGIN UNTUK PENGATURAN PENGHILANGAN LOGIN DAN PEMBUATAN LOGOUT -->
            <ul class="navbar-nav ms-auto">

                @auth

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"> <i class="bi bi-speedometer"></i> My Dashboard </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>

                @else
                <li class="nav-item"></li>
                <a href="/login" class="nav-link <?= ($active === "login") ? 'active' : ''; ?> text-dark"><i class="bi bi-box-arrow-in-right mr-2 text-dark"></i> Login</a>

                @endauth
            </ul>

            <!-- ############################# PILIHAN MENU UNTUK USER LOGIN DIATAS ######################## -->

        </div>
    </div>
</nav>