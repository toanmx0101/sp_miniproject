@extends('layouts.home')
@section('content')
<div class="breadcrumbs bordercolor">
	<div class="breadcrumbs_inner">
		<a href="" title="return to Home">Home</a>
		<span class="navigation-pipe">></span>
		<span class="navigation_page">Your shopping cart</span>
	</div>	
</div>
<h1>
	Shopping cart summary
</h1>
<ul id="order_steps" class="step3">
	<li class="step_current">
		<span>Summary</span>
	</li>
	<li class="step_todo">
		<span>Login</span>
	</li>
	<li class="step_todo">
		<span>Address</span>
	</li>
	<li class="step_todo">
		<span>Payment</span>
	</li>
	<li id="step_end" class="step_todo">
		<span>Success</span>
	</li>

</ul>
<span></span>
@if (Cart::count() == 0)
	<h3 style="">Your request is not available now! Your shopping cart is empty!!!</h3>	
@else
<div class="order_delivery">
	<ul class="bordercolor address first_item item">
		<li class="address_title">My Address</li>
		<li>
			<span class="address_name">toan</span>
			<span class="address_name">mai</span>
		</li>
		<li>
			<span class="address_address1">HA NOI	</span>	
			<span class="address_address2">	</span>
		</li>
		<li>
			<span class="address_city">	Ha Noi,</span>
			<span class="">Arizona</span>
			<span class="">85640</span>
		</li>
		<li><span class=""> United States</span></li>
		<li><span class="address_phone"></span>
		</li>
	</ul>
	<ul class="bordercolor address last_item alternate_item">
		<li class="address_title">Shipping Address</li>
		<li>
			<span class="address_name">toan</span>
			<span class="address_name">mai</span>
		</li>
		<li>
			<span class="address_address1">HA NOI	</span>	
			<span class="address_address2">	</span>
		</li>
		<li>
			<span class="address_city">	Ha Noi,</span>
			<span class="">Arizona</span>
			<span class="">85640</span>
		</li>
		<li><span class=""> United States</span></li>
		<li><span class="address_phone"></span></li>
	</ul>
<div class="clearblock"></div>
</div>
@endif
<p class="cart_navigation">
	@if (Auth::guest())
		<a href="/" class="button_large" title="Continue shopping" style="padding-top:7px">« Back</a>
    @else
		<a href="/shoppingcart" class="button_large" title="Continue shopping" style="padding-top:7px">« Back</a>
    @endif
	 <a href="/checkout/shipping" class="exclusive" title="Next" style="padding-top:7px">Next »</a>
</p>

@endsection