<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="/">@lang('navbar.home')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pages.about') }}">@lang('navbar.about')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pages.design') }}">@lang('navbar.design')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pages.shop') }}">@lang('navbar.shop')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pages.contact') }}">@lang('navbar.contact')</a>
        </li>
    </ul>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="/lang/uz">UZ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/lang/en">EN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/lang/ru">RU</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="/lang/ru">{{ session('lang') }}</a>
        </li> --}}
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <div class="search_icon">
            <ul>
                <li><a href="#"><img src="/assets/images/search-icon.png"></a></li>
                <li><a href="#"><img src="/assets/images/user-icon.png"></a></li>
            </ul>
        </div>
    </form>
</div>
