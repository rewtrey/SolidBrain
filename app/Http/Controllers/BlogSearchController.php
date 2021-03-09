<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;


class BlogSearchController extends Controller
{
    public function index(Request $request)
    {

        return view('admin.blogs.search.search',
            ['blogs' => Blog::orderBy('created_at', 'desc')->paginate(10)],);
    }


    public function search(Request $request){

        $search_text = $request->input('query');
        if ($search_text==NULL) {
            $resalt= Blog::all();
        } else {
            $resalt = Blog::select("title as name")
                ->where("title","LIKE","%{$search_text}%")
                ->get();

/*
         $resalt = Blog::select("title as name")
             ->where("title","LIKE","%{$request->input('query')}%")
             ->get();
*/}
        return response()->json($resalt);
    }

}
