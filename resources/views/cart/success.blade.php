@extends('layouts.home')

@section('title')
    Success
@stop
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
<ul id="order_steps" class="step5">
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
		<span>Payments</span>
	</li>
	<li id="step_end" class="step_todo">
		<span>Success</span>
	</li>

</ul>
<span></span>
@if (Cart::count() == 0)
	<h3 style="">Your request is not available now! Your shopping cart is empty!!!</h3>	
@else
	<div class="row" style="margin-top: 50px">
		<img class="col-sm-5" src="http://image.flaticon.com/icons/svg/189/189680.svg" style="width: 50px;height: 50px">
		<h3 style="">Your order was added!</h3>	
		<p>We will contact to you soon</p>
	</div>
@endif


<p class="cart_navigation">
	 <a href="/" class="exclusive" title="Next" style="padding-top:7px">Home »</a>
</p>

@endsection