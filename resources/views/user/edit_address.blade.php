
 @extends('layouts.home')
@section('title')
	Address Edit
@stop
@section('content')
<div class="breadcrumb bordercolor">
<div class="breadcrumb_inner">
<a href="http://livedemo00.template-help.com/prestashop_39664/" title="return to Home">Home</a><span class="navigation-pipe">&gt;</span><a href="http://livedemo00.template-help.com/prestashop_39664/my-account.php">My account</a><span class="navigation-pipe">&gt;</span>My addresses</div>
</div>
 <h1>My addresses</h1>
<p>Please configure the desired billing and delivery addresses to be preselected when placing an order. You may also add additional addresses, useful for sending gifts or receiving your order at the office.</p>
<div class="addresses">
<h3>Your addresses are listed below.</h3>
<p>Be sure to update them if they have changed.</p>
<ul class="address bordercolor last_item item" style="height: 176px;">
<li class="address_title">My address</li>
<li>
<span class="address_name">
toan
</span>
<span class="address_name">
mai
</span>
</li>
<li>
<span class="address_company">
GMO
</span>
</li>
<li>
<span class="address_address1">
HA NOI
</span>
<span class="address_address2">
</span>
</li>
<li>
<span class="address_city">
Ha Noi,
</span>
<span class="">
Arizona
</span>
<span class="">
85640
</span>
</li>
<li>
<span class="">
United States
</span>
</li>
<li>
<span class="address_phone">
</span>
</li>
<li class="address_update"><a href="http://livedemo00.template-help.com/prestashop_39664/address.php?id_address=30" title="Update">Update</a></li>
<li class="address_delete"><a href="http://livedemo00.template-help.com/prestashop_39664/address.php?id_address=30&amp;delete" onclick="return confirm('Are you sure?');" style="" title="Delete"></a></li>
</ul>
<div class="clearblock"></div>
</div>
<div class="address_add" style="clear: both;
padding: 20px 0 0 0;"><a href="http://livedemo00.template-help.com/prestashop_39664/address.php" title="Add an address" class="button_large" style="padding-top: 6px;">Add an address</a></div>
<ul class="footer_links">
<li><a href="http://livedemo00.template-help.com/prestashop_39664/my-account.php"><img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/icon/my-account.png" alt="" class="icon"></a><a href="http://livedemo00.template-help.com/prestashop_39664/my-account.php">Back to Your Account</a></li>
<li><a href="http://livedemo00.template-help.com/prestashop_39664/"><img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/icon/home.png" alt="" class="icon"></a><a href="http://livedemo00.template-help.com/prestashop_39664/">Home</a></li>
</ul>

@endsection