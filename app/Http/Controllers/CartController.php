<?php

namespace App\Http\Controllers;

use App\Cake;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $cake;

    public function __construct(Cake $cake)
    {
        $this->cake = $cake;
    }

    public function addToCart($id) {
        $cake = $this->cake->findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addToCart($cake);
        Session::put('cart', $cart);
        Session::flash('success', 'ok');
        return back();
    }

    public function showCart() {
        $cart = Session::get('cart');
//        dd($cart);
        return view('cakes.cart', compact('cart'));
    }
}
