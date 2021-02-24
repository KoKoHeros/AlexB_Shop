<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Check;
use App\FeaturedProduct;
use App\Order;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use App\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    function more_details(Request $request){
        $product_id = $request -> product_id;
        $product_detail = Product::where('id',$product_id)->get();
//        foreach ($product_detail as $product_details ){
//            $related_products = Product::where('tags',$product_details->tags)->get();
//        }
        return view('detail',compact('product_detail'));
    }

    function more_detail(Request $request){
        $product_id = $request -> product_id;
        $product_detail = FeaturedProduct::where('id',$product_id)->get();
//        foreach ($product_detail as $product_details ){
//            $related_products = Product::where('tags',$product_details->tags)->get();
//        }
        return view('detail',compact('product_detail'));
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


    function shop(){
        $product = Product::paginate(9);
        return view('shop',compact('product'));
    }

    function home(){
        $product = FeaturedProduct::all();
        return view('home',compact('product'));
    }


    function sortByBeef(){
        $product = Product::where('category','Beef')->paginate(9);
        return view('shop',compact('product'));
    }

    function sortByPork(){
        $product = Product::where('category','Pork')->paginate(9);
        return view('shop',compact('product'));
    }

    function sortByLamb(){
        $product = Product::where('category','Lamb')->paginate(9);
        return view('shop',compact('product'));
    }

    function add_cart(Request $request){
        $product_id = $_GET['product_id'];
        $session = Session::get('cart');
        if($session){
            foreach ($session as $item)
            {
                if($item==$product_id){
                    return 'This product is already exist in cart.';
                }
            }
        }
        $request->session()->push('cart', $product_id);
        return 'This product is successfully added in cart.';
    }

    function carts(Request $request){
        $cart_list = Session::get('cart');
        if($cart_list){
            foreach ($cart_list as $list){
                $newCart = new Cart();
                $carts = Product::where('id',$list)->get();
                foreach ($carts as $cart){
                    if(Cart::where('product_id',$cart->id)->first())continue;
                    $newCart-> product_id = $cart -> id;
                    $newCart-> name  = $cart -> name;
                    $newCart-> review = $cart -> review;
                    $newCart-> review_written_user_client = $cart -> review_written_user_client;
                    $newCart-> review_mark = $cart -> review_mark;
                    $newCart-> price = $cart -> price;
                    $newCart->quantity = 1;
                    $newCart-> description = $cart -> description;
                    $newCart-> category = $cart -> category;
//                    $newCart-> tags = $cart -> tags;
                    $newCart-> main_image = $cart -> main_image;
                    $newCart-> sub_image1 = $cart -> sub_image1;
                    $newCart-> sub_image2 = $cart -> sub_image2;
                    $newCart-> sub_image3 = $cart -> sub_image3;
                    $newCart -> save();
                }
            }
        }
//        $carts = Cart::where('client_email',email)->paginage(9);
        $carts = Cart::paginate(12);
        return view('carts',compact('carts'));
    }

    public function purchase()
    {
//        if (Session::get('email')) {
//            $carts = Cart::where('client_email', Session::email)->get();
        $carts = Cart::all();
        $neworder = new Order();
        $amount = 0;

        foreach ($carts as $cart) {

            //                $neworder->client_email = $cart->client_email;
//                $neworder->client_phone = Sesson  ->client_country;
//            $neworder->client_birthday = Sesson  ->client_country;
//            $neworder->client_address = Sesson  ->client_country;
//            $neworder->client_country = Sesson  ->client_country;
            $neworder->product_id = $cart->product_id;
            $neworder->name = $cart->name;
            $neworder->product_quantity = $cart->quantity;
            $neworder->price = $cart->price;
            $neworder->save();
            $amount = $amount + $cart->quantity * $cart->price;
        }
        return $amount;
    }

    function change_quantity(Request $request){
        $product_id = $_GET['product_id'];
        $quantity = $_GET['quantity'];
        $price = $_GET['price'];
        $carts = Cart::where('product_id',$product_id)->first();
        $carts->quantity = $quantity;
        $carts->save();
        return $product_id*$quantity;
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
}

