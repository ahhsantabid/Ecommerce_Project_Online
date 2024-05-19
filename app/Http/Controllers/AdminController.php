<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{ 
    public function view_category(){

        $category = Category::all();

         return view("admin.category",compact("category"));
    }

    public function add_category(Request $request){
        $category = new Category();
        $category->category_name = $request->category;
        $category->save();
        
        return redirect()->back()->with("success","Category Added Successfully!");

    }
    
}
