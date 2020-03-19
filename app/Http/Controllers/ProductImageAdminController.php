<?php

namespace App\Http\Controllers;

use App\Product_image;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductImageAdminController extends Controller{
    public function index(){
    $product_images = Product_image::paginate(15);
    //dd($products);
    return view('admin.product_image',['product_images'=>$product_images]);

}
    public function create()
    {
        $products = Product::all();
        $product_images = Product_image::all();
        return view('admin.product_image_create',['product_images'=>$product_images,'products'=>$products]);
    }

    public function store(Request $req){
        //dd($req);

        if ($files = $req->image) {
            //dd(123);
            $destinationPath = 'assets/images';      // uploproduct_image path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['image'] = "$profileImage";
        }
        $product_image = new Product_image;
        $product_image->pro_id = $req->product;
        $product_image->image = $profileImage;
        $product_image->save();
        return redirect()->back()->with('alert', 'Data inserted!');
    }

    public function edit(Request $req,$id){
        $product_image = Product_image::where('id',$id)->first();
        $product = Product::where('id',$product_image->pro_id)->first();
        $products = Product::all();
        return view('admin.product_image_edit',['product_image'=>$product_image,'product'=>$product,'products'=>$products]);
    }
    public function update(Request $req,$id){
        //dd($req);
        if ($files = $req->file('image')) {
            //dd(123);
            $destinationPath = 'assets/products';      // uploproduct_image path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['image'] = "$profileImage";
        }
        if($req->file('image') == null){
            $product_image = Product_image::find($id);
            //dd($pro);
            $product_image->pro_id = $req->product;
            $product_image->save();

            return redirect()->back()->with('alert', 'Data updated!');
        }
        else{
            $product_image = Product_image::find($id);
            //dd($pro);
            $product_image->pro_id = $req->product;
            $product_image->image = $profileImage;
            $product_image->save();

            return redirect()->back()->with('alert', 'Data updated!');
        }
    }
    public function destroy($id){
        $product_image = Product_image::find($id);
        $product_image->delete();
        return redirect()->back()->with('Product_image deleted');

    }
}
