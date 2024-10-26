<!DOCTYPE html>
<html lang="{{request()->segment(1)}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Name</title>
    <link href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css")}}" rel="stylesheet">
    {!! $minifyTools->MinifyCss('css/default.css',$cssMinifyType,$cssReBuild) !!}
    {!! $minifyTools->MinifyCss('css/inc/header_menu.css',$cssMinifyType,$cssReBuild) !!}
    {!! $minifyTools->MinifyCss('css/inc/category_menu.css',$cssMinifyType,$cssReBuild) !!}
    {!! $minifyTools->MinifyCss('css/inc/footer.css',$cssMinifyType,$cssReBuild) !!}

    @if(request()->segment(1) == 'ar')
        {!! $minifyTools->MinifyCss('css/inc/header_menu-rtl.css',"Web",$cssReBuild) !!}
    @endif
    @if($theme == 'dark')
        {!! $minifyTools->MinifyCss('css/dark.css',$cssMinifyType,$cssReBuild) !!}
    @endif

    @stack('CssFile')
</head>

<body>

@include('restaurant.layouts.inc.header_menu')
@include('restaurant.layouts.inc.category_menu')

@yield('content')

{{--@include('restaurant.layouts.inc.footer')--}}
{!! $minifyTools->MinifyJs('js/default.js',$jsMinifyType,$cssReBuild) !!}
@stack('JsFile')
</body>
</html>
