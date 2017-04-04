<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Product;
class CategoryController extends Controller
{	
    public function index($url){    
    	
    	switch ($url) {
    		case 1:
    			$title = "Art, Architecture";
    			break;
    		case 2:
    			$title = "Photography";
    			break;	
    		case 3:
    			$title = "Bibles & Bible Studies";
    			break;
    		case 4:
    			$title = "Biographies";
    			break;
    		case 5:
    			$title = "Business & Money";
    			break;
    		case 6:
    			$title = "Children's Books";
    			break;	
    		default:
    			$title = "asd";
    			break;
    	}

    	$data = Product::where('category_id','=',$url)->get();   
      return view('category.show',['data' => $data,'title' => $title]);
    }
    public function fuck(){    	
      return view('cart');
    }
}
