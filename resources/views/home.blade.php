@extends('layouts.app')
@section('title')
    اخبار اليوم
    @endsection

@section('content')



            @include('left')








            <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="middle_bar">
                        <div class="featured_sliderarea">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">



                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                    <li data-target="#myCarousel" data-slide-to="4"></li>



                                </ol>
                                <div class="carousel-inner" role="listbox">


                                    @if($last)
                                        @for($i=0;$i<count($last);$i++)
                                            @if($i == 0)
                                    <div class="item active"> <img src="{{ $last[$i]->image }}" alt="">
                                        <div class="carousel-caption">
                                            <h1><a href="#"> {{ $last[$i]->title }}</a></h1>
                                        </div>
                                    </div>
                                                @else
                                                <div class="item "> <img src="{{ $last[$i]->image}}" alt="">
                                                    <div class="carousel-caption">
                                                        <h1><a href="#"> {{ $last[$i]->title  }}</a></h1>
                                                    </div>
                                                </div>
                                            @endif
                                        @endfor
                                    @endif
                                </div>
                                <a class="left left_slide" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> </a> <a class="right right_slide" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> </a></div>
                        </div>



                        <div class="thumbnail_slider_area">
                            <div class="owl-carousel">








                                @if($urgent)
                                    @foreach($urgent as $item)



                                        <div class="signle_iteam"> <img src="{{ $item->image }}" alt="">
                                            <div class="sing_commentbox slider_comntbox">
                                                <p><i class="fa fa-calendar"></i>{{ $item->created_at }}</p>
                                                <a href="#"><i class="fa fa-comments">{{ count($item->comment)."  "."comment" }}</i></a></div>
                                            <a class="slider_tittle" href="#" style="font-size: 15px">{{ $item->title }}</a></div>


                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="single_category wow fadeInDown">



                            <div class="category_title"> <a href="pages/category-archive.html">{{  ($cat_names['cat1_name']?$cat_names['cat1_name']:"") }} </a></div>
                            <div class="single_category_inner">
                                <ul class="catg_nav">

                                    @if($cat1)
                                        @foreach($cat1 as $c1)

                                    <li>
                                        <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="{{ $c1->image }}" alt=""> </a></div>
                                        <a class="catg_title" href="pages/single_page.html">{{ $c1->title }}</a>
                                        <div class="sing_commentbox">
                                            <p><i class="fa fa-calendar"></i>{{ $c1->created_at }}</p>
                                            <a href="#"><i class="fa fa-comments"></i>{{ count($c1->comment)." "."comment" }}</a></div>
                                    </li>
                                        @endforeach
                                        @endif


                                </ul>
                            </div>
                        </div>
                        <div class="single_category  wow fadeInDown">
                            <div class="category_title"> <a href="pages/category-archive.html">{{  ($cat_names['cat2_name']?$cat_names['cat2_name']:"") }} </a></div>
                            <div class="single_category_inner">
                                <ul class="catg_nav catg_nav2">

                                    @if($cat2)
                                        @foreach($cat2 as $c2)


                                        <li>
                                        <div class="catgimg_container"> <a class="catg1_img" href="#"> <img src="{{ $c2->image }}" alt=""> </a></div>
                                        <a class="catg_title" href="#">{{ $c2->title }}</a>
                                        <div class="sing_commentbox">
                                            <p><i class="fa fa-calendar"></i>{{ $c2->created_at }}</p>
                                            <a href="#"><i class="fa fa-comments"></i>{{ count($c2->comment) }}</a></div>
                                        <p class="post-summary">{{ substr($c2->body,0,200)."....." }}</p>
                                    </li>

                                        @endforeach
                                    @endif



                                </ul>
                            </div>
                        </div>
                        <div class="category_three_fourarea  wow fadeInDown">
                            <div class="category_three">
                                <div class="single_category">



                                    <div class="category_title"> <a href="pages/single_page.html">{{  ($cat_names['cat3_name']?$cat_names['cat3_name']:"") }} </a></div>
                                    <div class="single_category_inner">
                                        <ul class="catg_nav catg_nav3">

                                            @if($cat3)
                                                @for($i=0;$i<count($cat3);$i++)
                                                    @if($i == 0)
                                            <li>
                                                <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="{{ $cat3[$i]->image }}" alt=""> </a></div>
                                                <a class="catg_title" href="#">{{ $cat3[$i]->title }}</a>
                                                <div class="sing_commentbox">
                                                    <p><i class="fa fa-calendar"></i>{{ $cat3[$i]->created_at }}</p>
                                                    <a href="#"><i class="fa fa-comments"></i>{{ count($cat3[$i]->comment) }}</a></div>
                                                <p class="post-summary">{{ substr($cat3[$i]->body,0,150) }}...</p>
                                            </li>
                                        </ul>
                                        <div class="catg3_bottompost wow fadeInDown">
                                            <ul class="catg3_snav">

                                                @else
                                                <li>
                                                    <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="{{ $cat3[$i]->image }}" alt=""> </a>
                                                        <div class="media-body"> <a class="catg_title" href="pages/single_page.html"> {{ $cat3[$i]->title }}</a>
                                                            <div class="sing_commentbox">
                                                                <p><i class="fa fa-calendar"></i>{{ $cat3[$i]->created_at }}</p>
                                                                <a href="#"><i class="fa fa-comments"></i>{{ count($cat3[$i]->comment) }}</a></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endif
                                                @endfor
                                                @endif


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="category_four wow fadeInDown">
                                <div class="single_category">
                                    <div class="category_title"> <a href="#">{{  ($cat_names['cat4_name']?$cat_names['cat4_name']:"") }} </a></div>
                                    <div class="single_category_inner">
                                        <ul class="catg_nav catg_nav3">

                                            @if($cat4)
                                                @for($i=0;$i<count($cat4);$i++)
                                                    @if($i == 0)
                                                        <li>
                                                            <div class="catgimg_container"> <a class="catg1_img" href="pages/single_page.html"> <img src="{{ $cat4[$i]->image }}" alt=""> </a></div>
                                                            <a class="catg_title" href="#">{{ $cat4[$i]->title }}</a>
                                                            <div class="sing_commentbox">
                                                                <p><i class="fa fa-calendar"></i>{{ $cat4[$i]->created_at }}</p>
                                                                <a href="#"><i class="fa fa-comments"></i>{{ count($cat4[$i]->comment) }}</a></div>
                                                            <p class="post-summary">{{ substr($cat4[$i]->body,0,150) }}...</p>
                                                        </li>
                                        </ul>
                                        <div class="catg3_bottompost wow fadeInDown">
                                            <ul class="catg3_snav">

                                                @else
                                                    <li>
                                                        <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="{{ $cat3[$i]->image }}" alt=""> </a>
                                                            <div class="media-body"> <a class="catg_title" href="pages/single_page.html"> {{ $cat3[$i]->title }}</a>
                                                                <div class="sing_commentbox">
                                                                    <p><i class="fa fa-calendar"></i>{{ $cat3[$i]->created_at }}</p>
                                                                    <a href="#"><i class="fa fa-comments"></i>{{ count($cat3[$i]->comment) }}</a></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif
                                                @endfor
                                                @endif




                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_category wow fadeInDown">
                            <div class="category_title"> <a href="#">{{  ($cat_names['cat5_name']?$cat_names['cat5_name']:"") }} </a></div>
                            <div class="single_category_inner">
                                <ul class="catg3_snav catg5_nav">


                                    @if($cat5)
                                        @foreach($cat5 as $c5)

                                        <li>
                                        <div class="media"> <a class="media-left" href="pages/single_page.html"> <img src="{{ $c5->image }}" alt=""> </a>
                                            <div class="media-body"> <a class="catg_title" href="pages/single_page.html"> {{ $c5->title }}</a>
                                                <div class="sing_commentbox">
                                                    <p><i class="fa fa-calendar"></i>{{ $c5->created_at }}</p>
                                                    <a href="#"><i class="fa fa-comments"></i>{{ count($c5->comment) }}</a></div>
                                            </div>
                                        </div>
                                    </li>

                            @endforeach
                                        @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



    @include('right')

@endsection
