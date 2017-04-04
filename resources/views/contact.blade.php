@extends('layouts.home')
@section('title')
    Contact
@stop
@section('content')

 
<div class="breadcrumbs bordercolor">
	<div class="breadcrumbs_inner">
		<a href="http://livedemo00.template-help.com/prestashop_39664/" title="return to Home">Home</a><span class="navigation-pipe">&gt;</span>
		<span class="navigation_page">Contact</span>
	</div>
</div>
 <h1>Customer Service - Contact us</h1>
<p class="bold">For questions about an order or for more information about our products.</p>
<form action="" method="post" class="std bordercolor" enctype="multipart/form-data" id="contact_form">
	<fieldset>
		<h3>Send a message</h3>
		<p class="select">
			<label for="id_contact">Subject Heading</label>
			<select id="id_contact" name="id_contact">
				<option value="0">-- Choose --</option>
				<option value="2">Customer service</option>
				<option value="1">Webmaster</option>
			</select>
		</p>
		<p id="desc_contact0" class="desc_contact">&nbsp;</p>
		<p id="desc_contact2" class="desc_contact" style="display:none;">
			For any question about a product, an order
		</p>
		<p id="desc_contact1" class="desc_contact" style="display:none;">
			If a technical problem occurs on this website
		</p>
		<p class="text">
			<label for="email">E-mail address</label>
			<input id="email" name="from" value="" type="text">
		</p>

		<p class="text">
			<label for="id_order">Order ID</label>
			<input name="id_order" id="id_order" value="" type="text">
		</p>

		<p class="textarea">
			<label for="message">Message</label>
			<textarea id="message" name="message" rows="15" cols="20"></textarea>
		</p>
		<p class="submit">
			<input name="submitMessage" id="submitMessage" value="Send" class="button_large" type="submit">
		</p>
	</fieldset>
</form>
@endsection
