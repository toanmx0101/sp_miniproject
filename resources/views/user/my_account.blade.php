@extends('layouts.home')
@section('title')
	My account
@stop
@section('content')
	
	<div class="breadcrumbs bordercolor">
		<div class="breadcrumbs_inner">
		<a href="/" title="return to Home">Home</a><span class="navigation-pipe">&gt;</span><span class="navigation_page">My account</span></div>
	</div>
	<h1>My account</h1>

	<h4>Welcome to your account. Here you can manage your personal information, addresses and orders.</h4>
	<ul id="my_account_links " style="margin-top: 52px;>
		<li style="padding: 12px 0 0 0;">
			<a href="" title="Orders">
				<img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/icon/order.png" alt="Orders" class="icon">
			</a>

			<a href="/my-account/history" title="Orders">Order history and details </a>
		</li>
		<li style="padding: 12px 0 0 0;">
			<a href="" title="My address">
				<img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/icon/addrbook.png" alt="My address" class="icon">
			</a>

			<a href="/my-account/edit-address" title="My address">My address</a>
		</li>
		<li style="padding: 12px 0 0 0;">
			<a href="" title="My personal information">
				<img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/icon/userinfo.png" alt="My personal information" class="icon">
			</a>

			<a href="" title="My personal information">My personal information </a>
		</li>
		<li style="padding: 12px 0 0 0;">
			<a href="/" title="Home">
				<img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/icon/home.png" alt="Home" class="icon">
			</a>

			<a href="" title="Home">Home</a>
		</li>
	</ul>

@endsection