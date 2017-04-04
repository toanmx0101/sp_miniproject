@extends('layouts.home')
@section('title')
	Order History
@stop
@section('content')
	<div class="breadcrumbs bordercolor">
		<div class="breadcrumbs_inner">
		<a href="" title="return to Home">Home</a>
		<span class="navigation-pipe">&gt;</span>
		<a href="/my-account">My account</a>
		<span class="navigation-pipe">&gt;</span>Order History</div>
	</div>
	<h1>Order History</h1>
	<p>Here are the orders you have placed since your account was created.</p>
	<div class="block-center" id="block-history">
		<p class="warning">You have not placed any orders.</p>
	</div>
	<ul class="footer_links">
		<li><a href="/my-account"><img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/icon/my-account.png" alt="" class="icon"></a>
		<a href="/my-account">Back to Your Account</a></li>
		<li><a href="/"><img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/icon/home.png" alt="" class="icon"></a>

		<a href="/">Home</a></li>
	</ul>
@endsection