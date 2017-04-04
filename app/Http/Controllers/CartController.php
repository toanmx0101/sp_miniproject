<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Cart;
use App\Product;
class CartController extends Controller
{	
    public function show(){
    	$data = Cart::content();
    	$count = Cart::count();
    	return view('cart.cart',['data' => $data,'count' => $count]);
    }
    public function remove_product($id){
    	Cart::remove($id);
    	return redirect()->back();
    }
    public function address(){
    	return view('cart.address');
    }
    public function shipping(){
    	return view('cart.shipping');
    }
    public function success(){
    	Cart::destroy();
    	return view('cart.success');
    }
}
