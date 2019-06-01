
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="row">
        <div class="right_bar">
            <div class="single_leftbar wow fadeInDown">
                <h2><span>الاكثر تعليقات</span></h2>
                <div class="singleleft_inner">
                    <ul class="catg3_snav ppost_nav wow fadeInDown">



                        @if($popular)
                            @foreach($popular as $value)


                                <li>
                                    <div class="media"> <a href="#" class="media-left"> <img alt="" src="{{ $value->image }}"> </a>
                                        <div class="media-body"> <a href="#" class="catg_title"> {{ substr($value->title,0,100) }}</a></div>
                                    </div>
                                </li>

                            @endforeach
                        @endif



                    </ul>
                </div>
            </div>
            <div class="single_leftbar wow fadeInDown">
                <h2><span>اعلانات</span></h2>
                <div class="singleleft_inner"> <a href="#"><img alt="" src="images/262x218.jpg"></a></div>
            </div>
            <div class="single_leftbar wow fadeInDown">
                <ul class="nav nav-tabs custom-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">أخر الاخبار</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">اخر التعليقات</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">اخر التعليقات</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                        <ul class="catg3_snav ppost_nav wow fadeInDown">

                            @if($last)
                                @foreach($last as $l)

                                    <li>
                                        <div class="media"> <a class="media-left" href="#"> <img src="{{ $l->image }}" alt=""> </a>
                                            <div class="media-body"> <a class="catg_title" href="#">{{ $l->title }}</a></div>
                                        </div>
                                    </li>





                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile">
                        <ul class="catg3_snav ppost_nav wow fadeInDown">



                            @if($comments)
                                @foreach($comments as $comment)
                                    <li>
                                        <div class="media"> <a class="media-left" href="#"> <img src="{{ $comment->news->image }}" alt=""> </a>
                                            <div class="media-body"> <a class="catg_title" href="#"> {{ $comment->comment }}</a></div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif



                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="messages">
                        <ul class="catg3_snav ppost_nav wow fadeInDown">





                            @if($comments)
                                @foreach($comments as $comment)
                                    <li>
                                        <div class="media"> <a class="media-left" href="#"> <img src="{{ $comment->news->image }}" alt=""> </a>
                                            <div class="media-body"> <a class="catg_title" href="#"> {{ $comment->comment }}</a></div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif





                        </ul>
                    </div>
                </div>
            </div>
            <div class="single_leftbar wow fadeInDown">
                <h2><span>Blog Archive</span></h2>
                <div class="singleleft_inner">
                    <div class="blog_archive">
                        <form action="#">
                            <select>
                                <option value="">Blog Archive</option>
                                <option value="">October(20)</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="single_leftbar wow fadeInDown">
                <h2><span>Labels</span></h2>
                <div class="singleleft_inner">
                    <ul class="label_nav">

                        @if($cats)
                            @foreach($cats as $cat)
                                <li><a href="#">{{ $cat->name }}</a></li>
                            @endforeach
                        @endif


                    </ul>
                </div>
            </div>
            <div class="single_leftbar wow fadeInDown">
                <h2><span>Links</span></h2>
                <div class="singleleft_inner">
                    <ul class="link_nav">
                        <li><a href="#">Blog Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Error Page</a></li>
                        <li><a href="#">Wpfreeware</a></li>
                        <li><a href="#">Facebook Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
