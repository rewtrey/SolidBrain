<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;


class BlogSearchController extends Controller
{
    public function index(Request $request)
    {
        $query = !empty(trim($request->search)) ? trim($request->search) : null;


        $resalt = Blog::where('title','LIKE','%'.$query.'%')->get()->all();

        return view('admin.blogs.search.search',compact('query','resalt'));
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
