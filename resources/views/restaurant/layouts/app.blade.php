<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Name</title>
    <link href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css")}}" rel="stylesheet">
{{--    <link href="{{asset("assets/web/restaurant/css/default.css")}}" rel="stylesheet">--}}
{{--    <link href="{{asset("assets/web/restaurant/css/inc/header_menu.css")}}" rel="stylesheet">--}}
{{--    <link href="{{asset("assets/web/restaurant/css/inc/header_menu-rtl.css")}}" rel="stylesheet">--}}
{{--    <link href="{{asset("assets/web/restaurant/css/inc/category_menu.css")}}" rel="stylesheet">--}}
{{--    <link href="{{asset("assets/web/restaurant/css/inc/footer.css")}}" rel="stylesheet">--}}
    @stack('CssFile')
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
        margin: 0;
        padding: 0;
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
    }

    .main-header.scrolled {
        background-color: var(--white);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: var(--header-height);
    }

    .logo img {
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

    .nav-menu a:hover,
    .nav-menu a.active {
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
        transform-origin: center;
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
        left: 20px;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 36px;
        color: var(--white);
        cursor: pointer;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        transition: background-color 0.3s ease;
        border: none;
    }

    .full-screen-menu .menu-content .close-menu::before {
        content: "×"; /* استخدم الرمز × */
        font-size: 24px; /* تعديل حجم الحرف */
        color: var(--white); /* لون الحرف */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .full-screen-menu .menu-content .close-menu:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }

    .full-screen-menu .menu-section a {
        display: block;
        color: var(--white);
        text-decoration: none;
        padding: 0.8rem 0;
        font-size: 1.2rem;
        transition: color var(--transition-speed) ease;
    }

    .full-screen-menu .menu-section a:hover {
        color: var(--orange);
    }

    .menu__icon {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        gap: 20px;
    }

    .auth-button .btn.login,
    .cart-button .btn.login {
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


</style>
</head>
<body>

@include('restaurant.layouts.inc.header_menu')
{{--@include('restaurant.layouts.inc.category_menu')--}}

{{--@yield('content')--}}

{{--@include('restaurant.layouts.inc.footer')--}}

{{--<script src="{{asset("assets/web/restaurant/js/default.js")}}"></script>--}}
@stack('JsFile')
<script>
    // Select important elements
    const header = document.querySelector('.main-header');
    const fullScreenMenu = document.getElementById('fullScreenMenu');
    const hamburgerMenu = document.querySelector('.hamburger-menu');

    const horizontalTabs = document.querySelector('.horizontal-tabs');
    const tabs = document.querySelectorAll('.horizontal-tabs .tab');
    const sections = document.querySelectorAll('.category__container__section section');


    // Function to toggle the 'scrolled' class on header
    function toggleHeaderScroll() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        header.classList.toggle('scrolled', scrollTop > 50);
    }

    // Function to toggle the full-screen menu
    function toggleMenu() {
        fullScreenMenu.classList.toggle('active');
        hamburgerMenu.classList.toggle('open');
    }

    // Function to highlight active tab based on scroll position
    function highlightActiveTab() {
        let currentSectionId = '';
        const headerOffset = header.offsetHeight + horizontalTabs.offsetHeight;

        sections.forEach(section => {
            const sectionTop = section.offsetTop - headerOffset;
            const sectionBottom = sectionTop + section.offsetHeight;
            if (window.pageYOffset >= sectionTop && window.pageYOffset < sectionBottom) {
                currentSectionId = section.id;
            }
        });

        tabs.forEach(tab => {
            const href = tab.getAttribute('href').substring(1);
            tab.classList.toggle('active', href === currentSectionId);
        });
    }

    // Function to smooth scroll to section when clicking on a tab
    function scrollToSection(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetSection = document.querySelector(targetId);
        const headerOffset = header.offsetHeight + horizontalTabs.offsetHeight;
        const targetPosition = targetSection.offsetTop - headerOffset;

        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    }


    // Function to handle tab scrolling
    function handleTabScroll() {
        const maxScroll = horizontalTabs.scrollWidth - horizontalTabs.clientWidth;
    }

    // Event Listeners
    window.addEventListener('scroll', () => {
        toggleHeaderScroll();
        highlightActiveTab();
    });

    tabs.forEach(tab => tab.addEventListener('click', scrollToSection));
    horizontalTabs.addEventListener('scroll', handleTabScroll);

    // Initial calls
    toggleHeaderScroll();
    highlightActiveTab();


    // Intersection Observer for more accurate section tracking
    const observerOptions = {
        root: null,
        rootMargin: `-${header.offsetHeight + horizontalTabs.offsetHeight}px 0px 0px 0px`,
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.id;
                tabs.forEach(tab => {
                    const href = tab.getAttribute('href').substring(1);
                    tab.classList.toggle('active', href === id);
                });
            }
        });
    }, observerOptions);

    sections.forEach(section => observer.observe(section));

</script>
</body>
</html>
