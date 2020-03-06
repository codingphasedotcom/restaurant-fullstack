<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FoodCategory;

class FoodCategoriesController extends Controller
{
    
    
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index(){
        $categories = FoodCategory::paginate(10);

        return view('admin/food-categories/all', [
            'categories' => $categories
        ]);
    }
    public function create(){
        return view('admin/food-categories/create');
    }
    public function store(){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string']
        ]);
        $category = new FoodCategory();
        $category->title = request('title');
        $category->description = request('description');
        $category->image_url = request('image_url');
        $category->save();

       
        return redirect('/admin/food-categories');
    }
    public function edit($id){
        $category = FoodCategory::find($id);
        
        return view('admin/food-categories/edit', [
            'category' => $category
        ]);
    }
    public function update($id){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string']
        ]);
        
        $category = FoodCategory::find($id);
        $category->title = request('title');
        $category->description = request('description');
        $category->image_url = request('image_url');
        $category->save();

        return redirect('/admin/food-categories');

    }
    public function delete($id){
        $category = FoodCategory::find($id);
        $category->delete();
        return redirect('/admin/food-categories');
    }
}
