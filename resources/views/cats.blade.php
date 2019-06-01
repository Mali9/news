@extends('layouts.app')
@section('title')
    اخبار اليوم
@endsection

@section('content')





    @include('left')

    <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
        <div class="row">
            <div class="middle_bar">
                <div class="category_archive_area">



                @if($news)
                    @foreach($news as $new)

                    <div class="single_archive wow fadeInDown"> <a href="#"><img src="{{ $new->image }}" height="300" alt=""></a> <a href="#" class="read_more">Read More <i class="fa fa-angle-double-right"></i></a>
                        <div class="singlearcive_article">
                            <h5><a href="#">{{ $new->title }}</a></h5>
                            <a class="author_name" href="#"><i class="fa fa-user"></i>{{ $new->user->name }}</a> <a class="post_date" href="#"><i class="fa  fa-clock-o"></i>{{ $new->created_at }}</a>
                            <p>{{ substr($new->body,0,100) }}...</p>
                        </div>
                    </div>
                 @endforeach
                    @endif





                </div>
                {{ $news->links() }}
            </div>
        </div>
    </div>


    @include('right')
@endsection
