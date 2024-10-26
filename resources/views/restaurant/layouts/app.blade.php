<!DOCTYPE html>
<html lang="{{request()->segment(1)}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Name</title>
    <link href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css")}}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @if(request()->segment(1) == 'ar')
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    @else
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">    @endif


{{--    {!! $minifyTools->MinifyCss('css/default.css',$cssMinifyType,$cssReBuild) !!}--}}
{{--    {!! $minifyTools->MinifyCss('css/inc/header_menu.css',$cssMinifyType,$cssReBuild) !!}--}}
{{--    {!! $minifyTools->MinifyCss('css/inc/category_menu.css',$cssMinifyType,$cssReBuild) !!}--}}
{{--    {!! $minifyTools->MinifyCss('css/inc/footer.css',$cssMinifyType,$cssReBuild) !!}--}}
    {!! $minifyTools->MinifyCss('css/inc/card.css',$cssMinifyType,$cssReBuild) !!}

    @if(request()->segment(1) == 'ar')
{{--        {!! $minifyTools->MinifyCss('css/inc/header_menu-rtl.css',"Web",$cssReBuild) !!}--}}
    @endif
    @if($theme == 'dark')
        {!! $minifyTools->MinifyCss('css/dark.css',$cssMinifyType,$cssReBuild) !!}
    @endif

    @stack('CssFile')
</head>

<body>

{{--@include('restaurant.layouts.inc.header_menu')--}}
{{--@include('restaurant.layouts.inc.category_menu')--}}

@yield('content')

{{--@include('restaurant.layouts.inc.footer')--}}
{!! $minifyTools->MinifyJs('js/default.js',$jsMinifyType,$cssReBuild) !!}
@stack('JsFile')
</body>
</html>
