<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $articles= $category
            ->articles()
            ->where('published', 1)
            ->paginate(15);

        $blogs =  $category
            ->blogs()
            ->where('published', 1)
            ->paginate(15);

        return view('page.category',
            compact('blogs', 'category' , 'articles'));
    }

    public function article($slug)
    {
        $article = Article::where('slug', $slug)->first();

        if (!$article) {
            return abort(404);
        }

        return view('page.article', [
            'article' => $article,
        ]);
    }

    public function blog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        if (!$blog) {
            return abort(404);
        }

        return view('page.blog', [
            'blog' => $blog,
        ]);
    }


}
