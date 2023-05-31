<header class="my_nav">
    <div class="container w-75">
        <nav class="navbar navbar-expand-lg navbar-light py-4">
            <div class="logo mx-3">
                <a href="/"><img width="70px" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/comics">Comics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacts">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/comics">Admin</a>
                </li>
            </ul>
            <form class="form-inline ml-auto d-flex ms-3">
                <input class="form-control mr-sm-2 border-0 shadow" type="search" placeholder="Search" aria-label="Search">
                <button class="btn border-0" type="submit">Search</button>
            </form>
        </nav>
    </div>
</header>