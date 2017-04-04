@extends('layouts.home')
@section('content')
<div class="breadcrumbs bordercolor">
	<div class="breadcrumbs_inner">

		<a href="" title="return to Home">Home</a>
		<span class="navigation-pipe">></span>
		<span class="navigation_page">Create your account</span>
	</div>	
</div>
<h1>Create Your Account</h1>
<ul id="order_steps" class="step2">
	<li class="step_done">
		<a href="">Summary</a>
	</li>
	<li class="step_current">
		<span>Login</span>
	</li>
	<li class="step_todo">
		<span>Address</span>
	</li>
	<li class="step_todo">
		<span>Shipping</span>
	</li>
	<li id="step_end" class="step_todo">
		<span>Payment</span>
	</li>
</ul>

<form action="http://livedemo00.template-help.com/prestashop_39664/authentication.php" method="post" id="account-creation_form" class="std">
	<fieldset class="account_creation">
		<h3>Your personal information</h3>
				
		<p class="required text">
			<label for="customer_lastname">Name</label>
			<input onkeyup="$('#lastname').val(this.value);" id="customer_lastname" name="customer_lastname" value="" type="text">
			<sup>*</sup>
		</p>
		<p class="required text">
			<label for="email">E-mail</label>
			<input id="email" name="email" value="" type="text">
			<sup>*</sup>
		</p>
		<p class="required password">
			<label for="passwd">Password</label>
			<input name="passwd" id="passwd" type="password">
			<sup>*</sup>
			<span class="form_info">(6 characters min.)</span>
		</p>
	</fieldset>


	<fieldset class="account_creation">
		<h3>Your address</h3>			
			<p class="required text">
				<label for="address1">Address</label>
				<input name="address1" id="address1" value="" type="text">
				<sup>*</sup>
				<span class="inline-infos">Street address, P.O. box, company name, c/o</span>
			</p>

					
			<p class="required">You must register at least one phone number <sup>*</sup></p>
			
			<p class="text">
				<label for="phone_mobile">Mobile phone</label>
				<input name="phone_mobile" id="phone_mobile" value="" type="text">
				<sup>*</sup>
			</p>
	</fieldset>
	
	<p class="required required_desc">
		<span><sup>*</sup>Required field</span>
	</p>
	<p class="submit">
		<input name="email_create" value="1" type="hidden">
		<input name="is_new_customer" value="1" type="hidden">
		<input class="hidden" name="back" value="my-account.php" type="hidden"> <input name="submitAccount" id="submitAccount" value="Register" class="exclusive" type="submit">
	</p>
</form>
@endsection
