<header>
    <div class="container-fluid bg-warning">
        <div class="container py-3 px-4">
            <nav class="navbar navbar-expand-lg">
                <div class="d-flex me-3 align-items-center">
                    <h1 class="text-light ms-2">
                        Shop
                    </h1>
                </div>
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item fs-4 ">
                                <a class="nav-link active text-light " aria-current="page" href="{{route('books.index')}}">Books</a>
                            </li>
                            <li class="nav-item fs-4">
                                <a class="nav-link active text-light " aria-current="page" href="{{route('movies.index')}}">Movies</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
