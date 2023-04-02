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
        </div>
    </div>
</nav>