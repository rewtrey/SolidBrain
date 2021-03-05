<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;


class BlogSearchController extends Controller
{
    public function search() {
        $request = $_GET['text'];
        if ($request==NULL) {
            $data= Blog::all();
        } else {
            $data=Blog::select("title as name")
                ->where("title","LIKE","%{$request->input('query')}%")
                ->get();
        }
        return view('results')->with('results',$data);
    }



/*
    public function index(Request $request)
    {
        $blogs = Blog::select("title as name")
            ->where("title","LIKE","%{$request->input('query')}%")
            ->get();
        return view('layouts.blogsSearch',
            compact('blogs'));
    }



    public function autocomplete(Request $request)
    {
        $data = Blog::select("title as name")
         ->where("title","LIKE","%{$request->input('query')}%")
         ->get();

        return response()->json($data);
    }
*/
}
