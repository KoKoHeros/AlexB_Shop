<?php

namespace App\Http\Controllers;

use App\FeaturedProduct;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    function admin(){
        return view('admin');
    }

    function saveproduct(Request $request){
        $name = $request -> name;
        $price = $request -> price;
        $description = $request -> description;
        $category = $request -> category;
//        $tags = $request -> tags;
        if(!$name or !$price or !$description or !$category or $request->main_image==null or $request->sub_image1==null or $request->sub_image2==null or $request->sub_image3==null)
        {
            toastr()->warning('Please input correctly in all forms!');

            return redirect()->back();
        }

        $main_image_path = $request->main_image->store('uploads');
        $sub_image_path1 = $request->sub_image1->store('uploads');
        $sub_image_path2 = $request->sub_image2->store('uploads');
        $sub_image_path3 = $request->sub_image3->store('uploads');


        $product = new Product();
        $product -> name = $name;
        $product -> price = $price;
        $product -> description = $description;
//        $product -> tags = $tags;
        $product -> category = $category;
        $product -> main_image = $main_image_path;
        $product -> sub_image1 = $sub_image_path1;
        $product -> sub_image2 = $sub_image_path2;
        $product -> sub_image3 = $sub_image_path3;
        $product -> save();
        toastr()->success('Product was successfully added.');

        return redirect()->back();
    }
    function savefeaturedproduct(Request $request){
        $name = $request -> name;
        $price = $request -> price;
        $description = $request -> description;
        $category = $request -> category;
//        $tags = $request -> tags;
        if(!$name or !$price or !$description or !$category or $request->main_image==null or $request->sub_image1==null or $request->sub_image2==null or $request->sub_image3==null)
        {
            toastr()->warning('Please input correctly in all forms!');

            return redirect()->back();
        }

        $main_image_path = $request->main_image->store('uploads');
        $sub_image_path1 = $request->sub_image1->store('uploads');
        $sub_image_path2 = $request->sub_image2->store('uploads');
        $sub_image_path3 = $request->sub_image3->store('uploads');


        $product = new FeaturedProduct();
        $product -> name = $name;
        $product -> price = $price;
        $product -> description = $description;
//        $product -> tags = $tags;
        $product -> category = $category;
        $product -> main_image = $main_image_path;
        $product -> sub_image1 = $sub_image_path1;
        $product -> sub_image2 = $sub_image_path2;
        $product -> sub_image3 = $sub_image_path3;
        $product -> save();
        toastr()->success('Product was successfully added.');

        return redirect()->back();
    }


    function remove(Request $request){
        $session_id = $request -> session_id;
        $product_id = $request -> product_id;
        $cart = Session::get('cart');
        unset($cart[$session_id]);
        Session::pull('cart',$session_id);
        Cart::where('product_id',$product_id)->delete();
        return redirect()->back();
    }


}
