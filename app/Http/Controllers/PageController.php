<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function category($slug)
    {
        $category = Category::whereSlug($slug)->firstorFail();
        $articles= $category
            ->articles()
            ->where('published', 1)
            ->paginate(15);

        return view('page.category',
            compact('articles', 'category'));
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

}
