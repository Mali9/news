<?php

namespace App\Http\Controllers;
use App\Cat;
use App\Comment;
use App\News;
use DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {

		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
        $cats = Cat::all();
        // $urgent = News::where('urgent', 1)
            // ->orderBy('id', 'desc')
            // ->get();
        //print_r($urgent);

        //most popular news

        $most = DB::table('comments')
            ->select(DB::raw('news_id,count(news_id) as m'))
            ->groupBy('news_id')
            ->orderBy('m', 'desc')
            ->take(10)
            ->get();
        foreach ($most as $mo) {
            $popular[] = News::findOrFail($mo->news_id);
        }

        //latest news
        $last = DB::table('news')
            ->orderBy('id')
            ->take(5)
            ->get();

        //category 1

        $cat1 = News::where('cat_id', 1)
            ->take(4)
            ->get();

        foreach ($cat1 as $item) {
            $cat_names['cat1_name'] = $item->cat->name;
        }

        //category 2
        $cat2 = News::where('cat_id', 2)
            ->take(2)
            ->get();

        foreach ($cat2 as $item) {
            $cat_names['cat2_name'] = $item->cat->name;
        }
        //category 3
        $cat3 = News::where('cat_id', 3)
            ->take(5)
            ->get();

        foreach ($cat3 as $item) {
            $cat_names['cat3_name'] = $item->cat->name;
        }

        //category 4
        $cat4 = News::where('cat_id', 4)
            ->take(5)
            ->get();

        foreach ($cat4 as $item) {
            $cat_names['cat4_name'] = $item->cat->name;
        }

        //category 5
        $cat5 = News::where('cat_id', 5)
            ->take(6)
            ->get();

        foreach ($cat5 as $item) {
            $cat_names['cat5_name'] = $item->cat->name;
        }
        //Recent comments
        $comments = Comment::orderBy('id', 'desc')
            ->take(10)
            ->get();


		return view('home',compact('cat_names','last'));
	}
}
