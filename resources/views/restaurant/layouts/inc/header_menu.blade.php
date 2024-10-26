<header class="main-header">
    <div class="container">
        <nav class="nav-container">
            <div class="logo">
                <a href="{{route('home_'.request()->segment(1))}}">
                    <img src="{{asset("assets/web/restaurant/img/logo.svg")}}" alt="شعار المطعم">
                </a>
            </div>
            <ul class="nav-menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Offers</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>

            <div class="menu__icon">

                <div class="auth-button">
                    <div class="btn login" aria-label="Login">
                        <i class="fas fa-user"></i>
                    </div>
                </div>

                <div class="cart-button">
                    <div class="btn login" aria-label="cart">
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
            <a href="#" class="active">Home</a>
            <a href="#">Menu</a>
            <a href="#">Offers</a>
            <a href="#">About us</a>
            <a href="#">Contact us</a>
        </div>
    </div>
</div>

