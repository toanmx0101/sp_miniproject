@extends('layouts.home')
@section('title')
    {{ $title }}
@stop
@section('content')

<div class="breadcrumbs bordercolor">
	<div class="breadcrumbs_inner">
		<a href="" title="return to Home">Home</a>
		<span class="navigation-pipe">></span>
		<span class="navigation_page">{{ $title }}</span>
	</div>	
</div>
<h1>
	{{ $title }}
	<span class="category-product-count">There are 6 products.</span>
</h1>
<div class="product_sort">
	<form id="productSortForm" action="">
		<label for="selectProduct">Sort by</label>
		<select id="selectProductSort">
			<option value="position:asc" selected="selected">--</option>
			<option value="price:asc">Price: lowest first</option>
			<option value="price:desc">Price: highest first</option>
			<option value="name:asc">Product name: A to Z</option>
			<option value="name:desc">Product name: Z to A</option>
			<option value="quantity:desc">In stock</option>
		</select>
	</form>
	<ul class="product_view">
		<li id="product_view_grid" class=""></li>
		<li id="product_view_list" class="current"></li>
	</ul>
</div>
<ul id="product_list" class="bordercolor list">

@foreach ($data as $product)
  	<li class="ajax_block_product bordercolor">
		<a href="http://localhost:8000/products/{{$product->id}}" class="product_img_link" title="">
			<img src="{{ $product->image_link }}" alt="Christopher Paolini Inheritance Cycle - Eragon">
		</a>
		<div class="center_block">
			<div class="product_flags">
				@if ($product->status == 'true' ||$product->status == 'featured' )
					<span class="availability bordercolor">Available</span>
				@else
					<span class="availability bordercolor">Not Available</span>
				@endif	
			</div>
			<h3>
				<a href="http://localhost:8000/products/{{$product->id}}" class="product_link" style="">{{ $product->name }}</a>
			</h3>
			<p class="product_desc">
				<a href="http://localhost:8000/products/{{$product->id}}" style="font: 11px Arial;color: #aaa;text-decoration: none;text-transform: none !important;">
					{{ $product->description }}
				</a>
			</p>			
		</div>
		<div class="right_block bordercolor">
			<span class="price">${{ $product->price }}</span>
			<form class="form-horizontal quantity_wanted_p" role="form" method="POST" action="{{ url('/cart/postCart') }}" style="margin-top: 10px">
	            {{ csrf_field() }}
	            <p class="hidden">
					<input name="id_product" value="{{ $product->id }}" type="hidden">
					<input name="name_product" value="{{ $product->name }}" type="hidden">
					<input name="price_product"  value="{{ $product->price }}" type="hidden">
					<input name="quantity"  value="1" type="hidden">
				</p>
				<div class="add_to_cart" >
	                <button id="submit" type="submit" style="height: 27px !important;display: inline-block;padding: 0 10px;background: #2e2e2e;border: none;font: 12px Arial !important;color: #fff !important;text-decoration: none !important;text-align: center;cursor: pointer;" >
	                   Add to cart
	                </button>
	            </div>
            </form>
			<br>
			<a href="http://localhost:8000/products/{{$product->id}}" class="button" title="View" style="padding-top:7px">View</a>
		</div>
	</li>
@endforeach
</ul>
@endsection