@extends('layouts.home')
@section('content')
<div class="breadcrumbs bordercolor">
	<div class="breadcrumbs_inner">
		<a href="" title="return to Home">Home</a>
		<span class="navigation-pipe">></span>
		<span class="navigation_page">Login</span>
	</div>	
</div>
<h1>Log in</h1>
<ul id="order_steps" class="step2">
	<li class="step_done">
		<a href="/cart">Summary</a>
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
<div class="error">Vui Lòng Nhập Username</div>
<form action="" method="POST">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="user" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btnLogin" value="Login" /></td>
		</tr>
	</table>
</form>
<form action="" method="post" id="create-account_form" class="std" style="width: 49%;clear: none;float: left;margin: 0 3% 0 0;background: url(http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/login-content-left.gif) right bottom no-repeat #ffffff;border: 1px solid #E2DEDE;padding: 5px 20px 53px 20px;margin-top: 10px;">
	<fieldset>
		<h3>Create your account</h3>
		<h4 style="text-transform: none;font-size: 12px;font-family: Arial, Helvetica, sans-serif;font-weight: normal;color: #555; height: 45px;margin: 0;padding: 15px 0 0 0;">Enter your e-mail address to create an account.</h4>
		<p class="text" style="width: 220px;padding: 15px 0 0 0;">
			<label for="email_create" style="display: block;clear: both;text-align: left;padding: 0 0 5px 0;">E-mail address</label>
			<input id="email_create" name="email_create" value="" class="account_input" type="text" 
			style="width: 212px;height: 25px;padding: 3px;background: #f1f1f1;border: 1px solid #f1f1f1;">
		</p>
		<p class="submit" style="padding: 18px 0 0 0;">
			<input class="hidden" name="back" value="my-account.php" type="hidden"> <input id="SubmitCreate" name="SubmitCreate" class="button_large" value="Create your account" type="submit">
			<input class="hidden" name="SubmitCreate" value="Create your account" type="hidden">
		</p>
	</fieldset>
</form>

<form action="" method="post" id="login_form" class="std" style="width: 47.0%;clear: none;float: left;background: url(http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/login-content-right.gif) right 0px no-repeat #f8f8f8;border: 1px solid #E2DEDE;
	padding: 5px 20px 23px 20px;margin-top: 10px;">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	<fieldset>
		<h3 style="margin: 0;padding: 17px 5px 7px 0;border-width: 0 0 1px 0;border-style: solid;">Already registered ?</h3>
		<p class="text">
			<label for="email" style="display: block;clear: both;text-align: left;padding: 0 0 5px 0;">E-mail address</label>
			<input id="email" name="email" value="" class="account_input" type="text" style="width: 212px;height: 25px;padding: 3px;background: #f1f1f1;border: 1px solid #f1f1f1;">
		</p>
		<p class="text">
			<label for="passwd" style="display: block;clear: both;text-align: left;padding: 0 0 5px 0;">Password</label>
			<input id="passwd" name="passwd" value="" class="account_input" type="password" style="width: 212px;height: 25px;padding: 3px;background: #f1f1f1;border: 1px solid #f1f1f1; ">
		</p>
		<p class="submit" style="padding: 18px 0 0 0;">
			<input class="hidden" name="back" value="my-account.php" type="hidden"> <input id="SubmitLogin" name="SubmitLogin" class="button" value="Log in" type="submit">
		</p>
		<p class="lost_password"><a href="">Forgot your password?</a></p>
	</fieldset>
</form>
@endsection
