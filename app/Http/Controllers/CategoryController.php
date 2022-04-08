<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index() 
    {
        return Category::get();
        // return DB::table('categories')->get();
    }

    public function show(Category $category) 
    {
        return $category;
    }
}
