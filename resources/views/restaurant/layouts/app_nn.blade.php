<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Name</title>
    <!-- روابط CSS -->
    <link href="{{asset("assets/web/restaurant/css/default.css")}}" rel="stylesheet">
    @stack('CssFile')
    <link href="{{asset("assets/web/restaurant/css/inc/header_menu.css")}}" rel="stylesheet">
    <link href="{{asset("assets/web/restaurant/css/inc/category_menu.css")}}" rel="stylesheet">
    <link href="{{asset("assets/web/restaurant/css/inc/footer.css")}}" rel="stylesheet">

</head>
<body>
@include('restaurant.layouts.inc.header_menu')
@include('restaurant.layouts.inc.category_menu')

@yield('content')


@include('restaurant.layouts.inc.footer')

<!-- روابط JavaScript -->
<script src="{{asset("assets/web/restaurant/js/default.js")}}"></script>
@stack('JsFile')
</body>
</html>
