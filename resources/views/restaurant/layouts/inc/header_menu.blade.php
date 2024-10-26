<header class="main-header">
    <div class="container">
        <nav class="nav-container">
            <div class="logo">
                <a href="{{route('home_'.request()->segment(1))}}">
                    <img src="{{asset("assets/web/restaurant/img/logo_".$theme.".png")}}" alt="شعار المطعم">
                </a>
            </div>
            <ul class="nav-menu">
                @foreach($menu_lang as $menu)
                    <li><a href="#" class="@if($loop->index == '0') active @endif active_xx">{{$menu}}</a></li>
                @endforeach
            </ul>

            <div class="menu__icon">

                <div class="__icon __lang_icon">
                    <div class="btn " aria-label="lang">
                        <a href="{{route('home_'.request()->segment(1))}}">
                            @if(request()->segment(1) == 'ar')
                                EN
                            @else
                                AR
                            @endif
                        </a>
                    </div>
                </div>

                <div class="__icon __dark_icon">
                    <div class="btn login-button" aria-label="Login">
                        <a href="{{route('toggle-theme')}}"><i class="fas fa-adjust"></i></a>
                    </div>
                </div>

                <div class="__icon">
                    <div class="btn login-button" aria-label="Login">
                        <i class="fas fa-user"></i>
                    </div>
                </div>

                <div class="__icon">
                    <div class="btn cart-button" aria-label="cart">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>

                <div class="hamburger-menu" onclick="toggleMenu()" aria-label="Toggle Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="full-screen-menu" id="fullScreenMenu">
    <div class="menu-content">
        <button class="close-menu" onclick="toggleMenu()" aria-label="Close Menu"></button>
        <div class="menu-section">
            @foreach($menu_lang as $menu)
                <a href="#">{{$menu}}</a>
            @endforeach
        </div>
    </div>
</div>

