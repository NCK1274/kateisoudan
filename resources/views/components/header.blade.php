<nav class="navbar navbar-expand-md navbar-light shadow-sm kateisoudan-header-container">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{asset('/img/KSS.png')}}" width="130" height="50" alt="">
    </a>
    <form class="form-inline">
        <div class="form-group">
            <input class="form-control kateisoudan-header-search-input">
        </div>
        <div class="input-group">
            <button type="submit" class="btn kateisoudan-header-search-button"><i class="fas fa-search kateisoudan-header-search-icon"></i></button>
        </div>
    </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto mr-5 mt-2">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('register') }}"><label>新規登録</label></a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('login') }}"><label>ログイン</label></a>
            </li>
            <hr>
            <!-- お気に入り -->
            <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('login') }}"><i class="far fa-star"></i></a>
            </li>
            @else
            <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('mypage') }}">
                    <i class="fas fa-user mr-1"></i><label>マイページ</label>
                </a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="{{ route('mypage.favorite') }}">
                    <i class="far fa-star"></i>
                </a>
            </li>
            @endguest
        </ul>
    </div>
</nav>