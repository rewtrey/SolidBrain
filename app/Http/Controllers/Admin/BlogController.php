<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\CreateBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;


class BlogController extends Controller
{

    public function index()
    {
        return view('admin.blogs.index', [
            'blogs' => Blog::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.blogs.create', [
            'blog' => [],
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter' => ''
        ]);
    }

    public function store(CreateBlogRequest $request)
    {

        $blog = Blog::create($request->all());
        $blog->user_id = $request->user()->id;
        $blog->slug = preg_replace('/<[^>]*>/', ' ', ($blog->title));

        if ($request->input('categories')) :
            $blog->categories()->attach($request->input('categories'));
        endif;
        $blog->save();

        return redirect()->route('admin.blogs.index');
    }

    public function show(Blog $blog)
    {
        //
    }


    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', [
            'blog' => $blog,
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter' => ''
        ]);
    }


    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->except('slug'));

        $blog->categories()->detach();
        if ($request->input('categories')) :
            $blog->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('admin.blogs.index');
    }


    public function destroy(Blog $blog)
    {
        $blog->categories()->detach();
        $blog->delete();

        return redirect()->route('admin.blogs.index');
    }
}
