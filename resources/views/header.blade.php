<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/css/theme.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <div class="box_wrapper">
        <header id="header">
            <div class="header_top">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav custom_nav">
                                <li style="font-size: 25px"><a href="{{ url('/') }}"">الرئيسيه</a></li>

                            @if($cats)
                                @foreach($cats as $cat)
                                <li style="font-size: 20px"><a href="#">{{ $cat->name }}</a></li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="header_search">
                    <button id="searchIcon"><i class="fa fa-search"></i></button>
                    <div id="shide">
                        <div id="search-hide">
                            <form action="#">
                                <input type="text" size="40" placeholder="Search here ...">
                            </form>
                            <button class="remove"><span><i class="fa fa-times"></i></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="logo_area"><a class="logo" href="#"><b>أ</b>خبار اليوم <span>صحيفة اخبار اليوم</span></a></div>
                <div class="top_addarea"><a href="#"><img src="{{ url('images/addbanner_728x90_V1.jpg')}}" alt=""></a></div>
            </div>
        </header>
        <div class="latest_newsarea"> <span>عاجل</span>
            <ul id="ticker01" class="news_sticker">

                @if($urgent)
                    @foreach($urgent as $l)
                <li><a href="#">{{ $l->title }}</a></li>

                    @endforeach
                    @endif
            </ul>
        </div>
