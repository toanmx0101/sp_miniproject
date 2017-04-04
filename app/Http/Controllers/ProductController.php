<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Requests\CartRequest;
use Cart;
use App\Author;
use App\Product;
use App\Image;
class ProductController extends Controller
{
    public function index($product_id){

        $product = Product::where('id','=',$product_id)->get();   
        $image = Image::where('product_id','=',$product_id)->get();
       
        return view('products.index', ['product' => $product,'image'=> $image]);
    }
    public function postCart(CartRequest $request){
    	Cart::add(array('id'=>$request->id_product,
    	 'name' => $request->name_product,
    	 'price' => $request->price_product,
    	 'qty' => $request->quantity
    	 ));
    	return redirect()->back();
    }
}