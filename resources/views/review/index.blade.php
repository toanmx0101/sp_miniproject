@extends('layouts.home')
@section('title')
    Request
@stop
@section('content')
<div class="breadcrumbs bordercolor">
	<div class="breadcrumbs_inner">
		<a href="/" title="return to Home">Home</a>
		<span class="navigation-pipe">></span>
		<span class="navigation_page">Request New Books</span>
	</div>	
</div>
@if (Auth::guest())

@else
	<form action="{{ url('review/postReview') }}" method="POST"  role="form" class="std bordercolor" enctype="" id="contact_form">
		{{ csrf_field() }}
		<fieldset>
			<h3>Your request</h3>
			<p class="textarea">
				<label>Book Name</label>
				<input id="name" type="text" class="" name="name" value="" style="width: 212px;height: 30px;border: 1px solid #f1f1f1;background: #f1f1f1;font: normal 12px Arial; padding: 6px;">
			</p>
			<p class="textarea">
				<label>Category</label>
				<input id="category" type="text" class="" name="category" value="" style="width: 212px;height: 30px;border: 1px solid #f1f1f1;background: #f1f1f1;font: normal 12px Arial; padding: 6px;">
			</p>
			<p class="textarea">
				<label for="message">Request</label>
				<textarea id="message" name="message" placeholder="Something about your interesting book"></textarea>
			</p>
			<p class="submit">
				<button name="submitMessage" id="submitMessage" value="Send" class="button_large btn btn-primary" type="submit">Summit</button>
			</p>
		</fieldset>
	</form>	
@endif

@foreach ($reviews as $review )

	<h2 style="font-size: 20px;">{{ $review->name }}</h2>
	<div class="dropdown" style="float: right;">
	  <button class="btn dropdown-toggle" type="" data-toggle="dropdown" > 
	  <span class="caret"></span></button>
	  <ul class="dropdown-menu">
	    <li><a href="#">Edit</a></li>
	    <li><a href="#">Delete</a></li>
	  </ul>
	</div> 
	<h5 style="padding-top: 15px;padding-bottom: 15px;"><span class="glyphicon glyphicon-time"></span> Post by wthe13123	, Sep 27, 2015.</h5>
	 
	<h5><span class="label label-danger">Nonfiction</span> 
	<!-- <span class="label label-primary">Ipsum</span>--></h5><br> 
	<p>Từ khi ra trường, mình vẫn luôn giữ thói quen đọc sách, một phần là để giải trí, một phần là để học hỏi cái mới. Dù cho không học hỏi, áp dụng được gì thì cảm giác cầm cuốn sách (hoặc iPad) nghiền ngẫm từng chữ cũng khá thú vị. Để khuyến khích thói quen đọc sách, cũng như chia sẻ sở thích với một số bạn, bài viết này sẽ là review tổng hợp ngắn những cuốn sách hay nhất mình đã đọc trong năm vừa rồi.</p>
	<br><br>
	<hr>
@endforeach

@endsection