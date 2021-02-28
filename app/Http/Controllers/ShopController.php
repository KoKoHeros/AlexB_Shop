<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Check;
use App\Email;
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

    function shop(){
        $product = Product::paginate(16);
        return view('shop',compact('product'));
    }

    function home(){
        $product = FeaturedProduct::all();
        return view('home',compact('product'));
    }


    function Fruit_Vegetables(){
        $product = Product::where('category','Fruit & Vegetables')->paginate(12);
        return view('shop',compact('product'));
    }

    function MeatPoultry(){
        $product = Product::where('category','MeatPoultry')->paginate(12);
        return view('shop',compact('product'));
    }

    function Fish_Seafood(){
        $product = Product::where('category','Fish & Seafood')->paginate(12);
        return view('shop',compact('product'));
    }

    function Delicatessen(){
        $product = Product::where('category','Delicatessen')->paginate(12);
        return view('shop',compact('product'));
    }

    function Diary_Eggs(){
        $product = Product::where('category','Diary & Eggs')->paginate(12);
        return view('shop',compact('product'));
    }

    function EverydayEssentials(){
        $product = Product::where('category','EverydayEssentials')->paginate(12);
        return view('shop',compact('product'));
    }

    function Bakery(){
        $product = Product::where('category','Bakery')->paginate(12);
        return view('shop',compact('product'));
    }

    function Impulse_Snaking(){
        $product = Product::where('category','Impulse & Snaking')->paginate(12);
        return view('shop',compact('product'));
    }

    function Drinks(){
        $product = Product::where('category','Drinks')->paginate(12);
        return view('shop',compact('product'));
    }

    function CateringSupplies(){
        $product = Product::where('category','CateringSupplies')->paginate(12);
        return view('shop',compact('product'));
    }

    public function add_cart(Request $request){
        $product_id = $_GET['product_id'];
        $quantity = $_GET['quantity'];
        $newCart = new Cart();
        $check = 0;
        $session = Cart::all();
        if($session){
            foreach ($session as $item)
            {
                if($item->product_id == $product_id){
                    $check = 1;
                }
            }
        }
        if($check == 1){
            $cart = Cart::where('product_id',$product_id)->first();
            $cart-> quantity = $quantity+$cart-> quantity;
            $cart -> save();
            return 'This product is successfully added in cart.';
        }
        else
        {
            $request->session()->push('cart', $product_id);
            $cart = Product::where('id',$product_id)->first();
            $newCart-> product_id = $cart -> id;
            $newCart-> name  = $cart -> name;
            $newCart-> review = $cart -> review;
            $newCart-> review_written_user_client = $cart -> review_written_user_client;
            $newCart-> review_mark = $cart -> review_mark;
            $newCart-> price = $cart -> price;
            $newCart-> quantity = $quantity;
            $newCart-> description = $cart -> description;
            $newCart-> category = $cart -> category;
//                    $newCart-> tags = $cart -> tags;
            $newCart-> main_image = $cart -> main_image;
            $newCart-> sub_image1 = $cart -> sub_image1;
            $newCart-> sub_image2 = $cart -> sub_image2;
            $newCart-> sub_image3 = $cart -> sub_image3;
            $newCart -> save();
            return 'This product is successfully added in cart.';
        }
    }
//    public function add_cart(Request $request){
//        $product_id = $_GET['product_id'];
//        $quantity = $_GET['quantity'];
//        $newCart = new Cart();
//        $check = 0;
//        $session = Session::get('cart');
//        if($session){
//            foreach ($session as $item)
//            {
//                if($item==$product_id){
//                    $check = 1;
//                }
//            }
//        }
//        if($check == 1){
//            $cart = Cart::where('id',$product_id)->first();
//            $cart-> quantity = $quantity+$cart-> quantity;
//            $cart -> save();
//            return 'This product is successfully added in cart.';
//        }
//        else
//        {
//            $request->session()->push('cart', $product_id);
//            $cart = Product::where('id',$product_id)->first();
//            $newCart-> product_id = $cart -> id;
//            $newCart-> name  = $cart -> name;
//            $newCart-> review = $cart -> review;
//            $newCart-> review_written_user_client = $cart -> review_written_user_client;
//            $newCart-> review_mark = $cart -> review_mark;
//            $newCart-> price = $cart -> price;
//            $newCart-> quantity = $quantity;
//            $newCart-> description = $cart -> description;
//            $newCart-> category = $cart -> category;
////                    $newCart-> tags = $cart -> tags;
//            $newCart-> main_image = $cart -> main_image;
//            $newCart-> sub_image1 = $cart -> sub_image1;
//            $newCart-> sub_image2 = $cart -> sub_image2;
//            $newCart-> sub_image3 = $cart -> sub_image3;
//            $newCart -> save();
//            return 'This product is successfully added in cart.';
//        }
//    }

    function carts(Request $request){
        $page = $request -> page;
        $carts = Cart::all();
        $total_amount = 0;
        foreach ($carts as $item){
            $total_amount = $total_amount + $item->quantity * $item -> price;
        }
        $carts = Cart::paginate(10);

        return view('carts',compact('carts','page','total_amount'));
    }
//    function carts(Request $request){
//        $cart_list = Session::get('cart');
//        $page = $request -> page;
//        if($cart_list){
//            foreach ($cart_list as $list){
//                $newCart = new Cart();
//                $carts = Product::where('id',$list)->get();
//                foreach ($carts as $cart){
//
//
//                    if(Cart::where('product_id',$cart->id)->first())continue;
//                    $newCart-> product_id = $cart -> id;
//                    $newCart-> name  = $cart -> name;
//                    $newCart-> review = $cart -> review;
//                    $newCart-> review_written_user_client = $cart -> review_written_user_client;
//                    $newCart-> review_mark = $cart -> review_mark;
//                    $newCart-> price = $cart -> price;
//                    $newCart->quantity = 1;
//                    $newCart-> description = $cart -> description;
//                    $newCart-> category = $cart -> category;
////                    $newCart-> tags = $cart -> tags;
//                    $newCart-> main_image = $cart -> main_image;
//                    $newCart-> sub_image1 = $cart -> sub_image1;
//                    $newCart-> sub_image2 = $cart -> sub_image2;
//                    $newCart-> sub_image3 = $cart -> sub_image3;
//                    $newCart -> save();
//                }
//            }
//        }
////        $carts = Cart::where('client_email',email)->paginage(9);
//        $carts = Cart::all();
//        $total_amount = 0;
//        foreach ($carts as $item){
//            $total_amount = $total_amount + $item->quantity * $item -> price;
//        }
//        $carts = Cart::paginate(10);
//
//        return view('carts',compact('carts','page','total_amount'));
//    }

    public function remove(){
        $product_id = $_GET['product_id'];
//        $session = Session::get('cart');
//        if($session){
//        foreach ($session as $item) {
//            if ($item == $product_id) {
//                unset($session[$item]);
//                $session->pull();
////                return redirect()->back();
//            }
//        }
//        }
        Cart::where('product_id',$product_id) -> delete();
        return 'Successfully removed from carts.';
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
        $carts = Cart::where('product_id',$product_id)->first();
        $carts->quantity = $quantity;
        $carts->save();
        return $quantity;
    }
    function sendEmail(Request $request){
        $email = $request -> email;
        $newemail = new Email();
        $newemail -> email = $email;
        $newemail -> save();
        return redirect() -> back();
    }
}

