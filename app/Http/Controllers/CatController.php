<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class CatController extends Controller
{









    public function index($id)
    {
        $news=News::where('cat_id',$id)->paginate(4);
       // print_r($news);
        return view('cats',compact('news'));
    }
}
