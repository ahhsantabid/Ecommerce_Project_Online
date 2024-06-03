<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{ 
    public function view_category(){

        // $category = Category::all();
         $category= Category::orderBy('id','desc')->get();
        //return response()->json($category)->orderBy('id', 'asc')->get();


          return view("admin.category",compact("category"));
    }

    public function add_category(Request $request){
        $category = new Category();
        $category->category_name = $request->category;
        $category->save();
        
        return redirect()->back()->with("success","Category Added Successfully!");

    }

    public function delete_category(Request $request, $id){

        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with("success","Category Delete Done!");
}


   public function edit_category(Request $request, $id){

    $category = Category::find($id);
    return view("admin.edit_category",compact("category"));

}

public function update_category(Request $request, $id){

    $category = Category::find($id);
    $category->category_name = $request->updateCategory;
        // dd($category->category_name);
    $category->save();
     return redirect('/view_category')->with("success","Category Updated Successfully!");
    // return redirect('/view_category');

}


public function add_product(Request $request){

    $category = Category::all();
    return view('admin.addProduct',compact('category'));
}


public function upload_product(Request $request){

    $product = new Product();

    $product->product_name = $request->product_name;
    $product->product_price = $request->product_price;
    $product->product_discription = $request->product_discription;
    $product->product_qty = $request->product_qty;
    $product->product_category = $request->product_category;
    //image_part
    $imageName = time().'.'.request()->product_img->getClientOriginalExtension();
    request()->product_img->move(public_path('products'), $imageName);
    $product->product_img = $imageName;
    //  dd($product);

    $product->save();

    return redirect()->back()->with("success","Product Added Successfully!");


}


public function view_product(Request $request){

    $products = Product::latest()->paginate(6);

    return view('admin.viewProduct',compact('products'));
}

public function delete_product(Request $request, $id){
    $product = Product::find($id);
    $product->delete();
    return redirect()->back()->with("success","Product Delete Done!");

}

public function edit_product(Request $request, $id){

    $product = Product::find($id);

    $category = Category::all();

    return view('admin.edit_product',compact('product','category'));
}

public function update_product(Request $request,$id){

    // $data = $request->all();
  
    $product = Product::find($id);
    // dd($product->update($data));

    $product->product_name  = $request->update_product_name;
    $product->product_price  = $request->update_product_price;
    $product->product_discription  = $request->update_product_des;
    $product->product_qty  = $request->update_product_qty;
    $product->product_category  = $request->update_product_category;

    $product->save();

    return redirect('/view_product')->with("success","Product Updated Successfully!");


    
    



}


}