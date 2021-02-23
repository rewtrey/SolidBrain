<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class DashboardController extends Controller
{
    public function  dashboard(){
        return view('admin.dashboard', [
          'categories'=> Category::LastCategories (5),
          'articles' => Article::LastArticles (5),
          'count_categories' => Category::count(),
          'count_articles' => Article::count()
        ]);
    }
}
