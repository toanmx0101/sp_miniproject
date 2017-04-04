<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Product;
class StaticPagesController extends Controller
{
    public function index(){
    	
    	$featureds = Product::where('status','=','featured')->get();   
    	return view('index',['featureds' => $featureds]);
    }
    public function specials(){
    	
    }


}
