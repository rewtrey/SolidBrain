<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="footer__projects is-hidden-mobile is-hidden-tablet-only">
        <div class="container">
            <div class="columns center-flex-v">

                <ul class="nav nav-list nav-menu-list-style">
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav">
            @include('layouts.top_menu', ['categories' => $categories])
        </ul>
    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>
