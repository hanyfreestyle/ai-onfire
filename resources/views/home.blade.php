@extends('restaurant.layouts.app')
@push('CssFile')
    <style>
        :root {
            --orange: rgb(245, 128, 34);
            --dark-blue: rgb(10, 57, 116);

            --secondary-color: rgb(245, 128, 34);
            --primary-color: rgb(10, 57, 116);
            --white: #ffffff;
            --light-gray: #f9f9f9;
            --medium-gray: #e0e0e0;
            --dark-gray: #333333;

            --tabs-height: 50px;
            --transition-speed: 0.3s;
            --border-radius: 10px;
            --box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);

            --header-height: 70px;
            --logo-height: calc(var(--header-height) - 20px);
            --logo-height-scrolled: calc(var(--header-height) - 20px);

        }

        body {
            padding-top: calc(var(--header-height) + var(--tabs-height));
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        h1, h2, h3, h4, h5, h6 {
            margin: 0;
            padding: 0;
        }


        .main-header {
            width: 100%;
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: var(--white);
            box-shadow: var(--box-shadow);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 0;
        }

        .main-header.scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 !important;
            height: var(--header-height);
        }

        .main-header .logo {

        }

        .main-header .logo img {
            height: var(--logo-height);
        }

        .main-header.scrolled .logo img {
            height: var(--logo-height-scrolled);
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 30px;
        }


        .nav-menu a {
            text-decoration: none;
            color: var(--primary-color);
            font-weight: 600;
            transition: color 0.3s;
        }

        .nav-menu a:hover, .nav-menu a.active {
            color: var(--secondary-color);
        }

        .hamburger-menu {
            width: 24px;
            height: 18px;
            position: relative;
            cursor: pointer;
            flex-direction: column;
            justify-content: space-between;
            display: none;
        }

        .hamburger-menu span {
            display: block;
            height: 2px;
            width: 100%;
            background: var(--dark-blue);
            border-radius: 3px;
            transition: all var(--transition-speed) ease;
        }

        .hamburger-menu.open span:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger-menu.open span:nth-child(2) {
            opacity: 0;
        }

        .hamburger-menu.open span:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        .full-screen-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(10, 57, 116, 0.95);
            z-index: 2000;
            overflow-y: auto;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .full-screen-menu.active {
            display: block;
            opacity: 1;
            visibility: visible;
        }

        .full-screen-menu .menu-content {
            padding: 70px 50px;
            color: var(--white);
        }


        .full-screen-menu .menu-content .close-menu {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 36px;
            color: var(--white);
            cursor: pointer;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: background-color 0.3s ease;
        }

        .full-screen-menu .menu-content .close-menu:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .full-screen-menu .menu-section {
            margin-bottom: 1.5rem;
        }

        .full-screen-menu .menu-section a {
            display: block;
            color: var(--white);
            text-decoration: none;
            padding: 0.4rem 0;
            transition: color var(--transition-speed) ease;
            font-size: 1rem;
        }

        .full-screen-menu {
            display: none;
        }

        .menu__icon {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 20px;
        }

        .auth-button .btn.login {
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .hamburger-menu {
                display: flex;
            }

            .nav-menu {
                display: none;
            }
        }

        .horizontal-tabs {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: var(--white);
            box-shadow: var(--box-shadow);
            position: fixed;
            top: var(--header-height);
            left: 0;
            right: 0;
            z-index: 999;
            height: var(--tabs-height);
            padding: 0 5%;
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .horizontal-tabs::-webkit-scrollbar {
            display: none;
        }

        .tab {
            padding: 0 15px;
            height: 100%;
            display: flex;
            align-items: center;
            color: var(--dark-blue);
            text-decoration: none;
            font-size: 0.9rem;
            transition: all var(--transition-speed) ease;
            position: relative;
        }

        .tab::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: var(--orange);
            transition: all var(--transition-speed) ease;
        }

        .tab.active::after, .tab:hover::after {
            width: 100%;
            left: 0;
        }

        .tab.active, .tab:hover {
            color: var(--orange);
        }


        @media (max-width: 768px) {

            .horizontal-tabs {
                justify-content: flex-start;
                padding: 0 3%;
            }

            .tab {
                padding: 0 10px;
                font-size: 0.8rem;
            }

        }

        @media (min-width: 769px) and (max-width: 1024px) {


            .horizontal-tabs {
                padding: 0 4%;
            }

            .tab {
                padding: 0 12px;
            }


        }

        @media (min-width: 1025px) {


            .horizontal-tabs {
                padding: 0 5%;
            }

            .tab {
                padding: 0 20px;
                font-size: 1rem;
            }
        }

        .category__section {
            padding: 10px 0;
            margin: 20px 0;

        }

        .category__section h2 {
            font-size: 1.4rem;
            margin-bottom: 10px;


        }

        .category__container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px; /* المسافة بين الكروت */
        }

        .product__card {
            width: calc(25% - 15px); /* عرض 4 كروت في الصف مع المسافة */
            box-sizing: border-box;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card__img {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .card__img img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* لتغطية الصورة بالكامل داخل العنصر */
        }

        .card__name {
            margin-top: 10px;
            text-align: center;
        }

        /* تنسيق خاص لشاشات الموبايل */
        @media (max-width: 768px) {
            .product__card {
                width: calc(50% - 15px); /* عرض 4 كروت في الصف مع المسافة */
            }

            .card__img {
                width: 100%;
                height: 100px;
                overflow: hidden;
            }
        }


    </style>

@endpush
@section('content')
    {{--    <section class="hero-section">--}}
    {{--        <div class="hero-content">--}}
    {{--            <h1>أشهى المأكولات بين يديك</h1>--}}
    {{--            <p>استمتع بأفضل الأطباق الشهية مع خدمة التوصيل السريع</p>--}}
    {{--            <button class="btn order-now">اطلب الآن</button>--}}
    {{--        </div>--}}
    {{--    </section>--}}


    <div class="container">
        @for($i = 1; $i <= 5; $i++)
            <section id="Category-{{$i}}" class="category__section">
                <h2>Category {{$i}}</h2>
                <div class="category__container">
                    @for($x = 1; $x <= 5; $x++)
                        <div class="product__card">
                            <div class="card__img">
                                <img src="https://freestyle4u.com/ai/0{{$x}}.webp">
                            </div>
                            <div class="card__name">
                                <h2>Product Name {{$x}}</h2>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>
        @endfor
    </div>


@endsection
