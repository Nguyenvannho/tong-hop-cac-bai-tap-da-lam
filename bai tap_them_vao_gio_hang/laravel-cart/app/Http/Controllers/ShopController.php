<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Cart;


// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
{
   $products = Product::all();
   return view('home', compact('products'));
}
public function addToCart($idProduct)

{

   $product = Product::findOrFail($idProduct);

   $oldCart = Session::get('cart');

 

   $newCart = new Cart($oldCart);

   $newCart->add($product);

 

   Session::put('cart', $newCart);

   Session::flash('add-to-cart-success', 'Them sp vao gio hang thang cong');

   return back();

}

 

public function getCart()

{

   
    $cart = Session::get('cart');
   return view('cart.index', compact('cart'));

}

 
}
