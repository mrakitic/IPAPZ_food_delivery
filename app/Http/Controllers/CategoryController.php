<?php

namespace App\Http\Controllers;

use App\Category;
use App\Meal;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::paginate(3);

        return view('category', compact('category'));
    }

    public function createCategory()
    {
        $meal = Meal::all();
        return view('createCategory',compact('meal'));
    }

    public function store()
    {
        Category::create([
            'name' => \request('category_name')
        ]);
        return redirect('/category');
    }

    public function show(Category $category,Request $request)
    {

        return view('showCategory', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('editCategory', compact('category'));
    }

    public function destroy(Category $category)
    {
       $category -> delete();

        return redirect('/category');

    }

    public function update(Category $category)
    {

        $category -> name = \request('category_name');

        $category->save();

        return redirect('/category');
    }
}
