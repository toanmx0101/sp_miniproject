@extends('layouts.home')
@section('title')
    Payment
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
<ul id="order_steps" class="step4">
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

<h3>Online payment is not availabel now!</h3>


<p class="cart_navigation">
	@if (Auth::guest())
		<a href="/checkout/address" class="button_large" title="Continue shopping" style="padding-top:7px">« Back</a>
    @else
		<a href="/checkout/address" class="button_large" title="Continue shopping" style="padding-top:7px">« Back</a>
    @endif
	 <a href="/checkout/success" class="exclusive" title="Next" style="padding-top:7px">Next »</a>
</p>

@endsection