<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Materi;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('interface.category.index', [
            'title' => 'Category',
            'active' => 'materi',
            'categories' => $categories
        ]);
    }
    public function show(Category $category)
    {
        //
        return view('interface.category.materi', [
            'title' => 'Materi',
            'active' => 'materi',
            'category' => $category
        ]);
    }
    public function learn(Materi $materi)
    {
        //
        return view('interface.category.learn', [
            'title' => 'Learm',
            'active' => 'materi',
            'materi' => $materi
        ]);
    }
}
