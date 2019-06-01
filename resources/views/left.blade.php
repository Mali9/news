
<section id="contentbody">
    <div class="row">
<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
    <div class="row">
        <div class="left_bar">
            <div class="single_leftbar">
                <h2><span>اخر الاخبار</span></h2>
                <div class="singleleft_inner">
                    <ul class="recentpost_nav wow fadeInDown">
                        @if($last)
                            @foreach($last as $l)

                                <li><a href="pages/single_page.html"><img src="{{ $l->image }}" alt=""></a> <a class="recent_title" href="pages/single_page.html">{{ $l->title }}</a></li>
                            @endforeach
                        @endif

                    </ul>
                </div>
            </div>
            <div class="single_leftbar wow fadeInDown">
                <h2><span>اعلانات</span></h2>
                <div class="singleleft_inner"> <a href="#"><img src="images/150x600.jpg" alt=""></a></div>
            </div>
        </div>
    </div>
</div>