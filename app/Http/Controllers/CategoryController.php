<?php

namespace App\Http\Controllers;

use App\News;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('news.categories')->with('categories', Category::getCategories());
    }

    public function show($name) {
        return view('news.category')->with('news', News::getNewsByCategoriesName($name));
    }
}
