@extends('layouts.home')
@section('title')
    Special
@stop
@section('content')

<div class="breadcrumbs bordercolor">
	<div class="breadcrumbs_inner">
		<a href="" title="return to Home">Home</a>
		<span class="navigation-pipe">></span>
		<span class="navigation_page">Specials</span>
	</div>	
</div>
<h1>
	Specials
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
	<li class="ajax_block_product bordercolor">
		<a href="" class="product_img_link" title="">
			<img src="http://livedemo00.template-help.com/prestashop_39664/img/p/13-37-home.jpg" alt="Christopher Paolini Inheritance Cycle - Eragon">
		</a>
		<div class="center_block">
			<div class="product_flags">
				<span class="availability bordercolor">Available</span>
			</div>
			<h3>
				<a href="" class="product_link">Christopher Paolini Inheritance...</a>
			</h3>
			<p class="product_desc">
				<a href="product_descr" style="font: 11px Arial;color: #aaa;text-decoration: none;text-transform: none !important;">
					We have tremendous variety of products, here you can find the world famous bestsellers and the books of unknown authors. Actually we do understand that our activity is very important for many of you and we will never let you down. Our business is very noble and it has many traditions. That is why we have such a great number of devoted clients all over the country. Books became more available.
				</a>
			</p>			
		</div>
		<div class="right_block bordercolor">
			<span class="price">$50.00</span>
			<a href="" class="exclusive" title="Add to cart">Add to cart</a>
			<br>
			<a href="" class="button" title="View" style="padding-top:7px">View</a>
		</div>
	</li>
	<li class="ajax_block_product bordercolor">
		<a href="" class="product_img_link" title="">
			<img src="http://livedemo00.template-help.com/prestashop_39664/img/p/14-40-home.jpg" alt="Grimm's Complete Fairy Tales">
		</a>
		<div class="center_block">
			<div class="product_flags">
				<span class="availability bordercolor">Available</span>
			</div>
			<h3>
				<a href="" class="product_link">Christopher Paolini Inheritance...</a>
			</h3>
			<p class="product_desc">
				<a href="product_descr" style="font: 11px Arial;color: #aaa;text-decoration: none;text-transform: none !important;">
					We have tremendous variety of products, here you can find the world famous bestsellers and the books of unknown authors. Actually we do understand that our activity is very important for many of you and we will never let you down. Our business is very noble and it has many traditions. That is why we have such a great number of devoted clients all over the country. Books became more available.
				</a>
			</p>			
		</div>
		<div class="right_block bordercolor">
			<span class="price">$50.00</span>
			<a href="" class="exclusive" title="Add to cart">Add to cart</a>
			<br>
			<a href="" class="button" title="View" style="padding-top:7px">View</a>
		</div>
	</li>
	
</ul>
@endsection