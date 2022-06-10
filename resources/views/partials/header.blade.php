<header>
    <div class="container">
        <nav class="d-flex justify-content-between align-items-center py-3">
            <div class="logo-nav">
                <img class="logo_brand img-fluid" src="{{asset('img/dc-logo.png')}}" alt="Logo DC">
            </div>
            <!-- /.logo-nav -->
            <div class="item-nav h-100">
                <a class="text-decoration-none px-2 py-2 text-end {{ Route::currentRouteName() === 'characters' ? 'active' : '' }}" href="{{route('characters')}}">CHARACTERS</a>
                <a class="text-decoration-none px-2 py-2 text-end {{ Route::currentRouteName() === 'comics.index' || Route::currentRouteName() === 'comics.show' ? 'active' : '' }}" href="{{route('comics.index')}}">COMICS</a>
                <a class="text-decoration-none px-2 py-2 text-end {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{route('movies')}}">MOVIES</a>
                <a class="text-decoration-none px-2 py-2 text-end {{ Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{route('tv')}}">TV</a>
                <a class="text-decoration-none px-2 py-2 text-end {{ Route::currentRouteName() === 'games' ? 'active' : '' }}" href="{{route('games')}}">GAMES</a>
                <a class="text-decoration-none px-2 py-2 text-end {{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" href="{{route('collectibles')}}">COLLECTIBLES</a>
                <a class="text-decoration-none px-2 py-2 text-end {{ Route::currentRouteName() === 'videos' ? 'active' : '' }}" href="{{route('videos')}}">VIDEOS</a>
                <a class="text-decoration-none px-2 py-2 text-end {{ Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{route('fans')}}">FANS</a>
                <a class="text-decoration-none px-2 py-2 text-end {{ Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{route('news')}}">NEWS</a>
                <a class="text-decoration-none px-2 py-2 text-end {{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{route('shop')}}">SHOP</a>
            </div>
            <!-- /.item-nav -->
        </nav>
    </div>
    <!-- /.container -->
</header>