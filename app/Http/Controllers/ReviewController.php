<?php

namespace App\Http\Controllers;
use App\Http\Requests\ReviewRequest;
use App\Review;
use DB,Auth;
class ReviewController extends Controller
{
	public function show()	{
		$reviews = Review::all();
		return view('review.index', ['reviews' => $reviews]);
	}
    public function postReview(ReviewRequest $request){
    	Review::create(['content' => $request->message,'name' =>$request->name ,'user_id' => Auth::user()->id,'category' => $request->category]);
		return redirect()->back(); 
    }
}
