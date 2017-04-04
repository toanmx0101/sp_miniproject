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
<ul id="order_steps" class="step1">
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
@if ($count == 0)
	<p class="warning">Your shopping cart is empty.</p>
@else
<p class="	">
	Your shipping cart contains 
	<span id="summary_products_quantity">{{ $count }} product</span>
</p>

<div id="order-detail-content" class="table_block">
	<table id="cart_summary" class="std">
		<thead>
			<tr>
				<th>Product</th>
				<th>Description</th>
				<th>Ref.</th>
				<th>Avail</th>
				<th>Unit price</th>
				<th>Qty</th>
				<th>Total</th>
			</tr>
			
			<tbody>
				@foreach ($data as $item)
					<tr id="" class="cart_item">

						<td class="cart_product">
							<a href="">
								<img src="{{ App\Product::where('id', $item->id)->get()[0]->image_link }}" style="width: 50px; height: 70px">
							</a>
						</td>
						<td class="cart_description">
							<h5>
								<a href="" class="product_link">{{ $item->name }}</a>
							</h5>
						</td>
						<td class="cart_ref">__</td>
						<td class="cart_availability">
							<img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/icon/available.png" alt="Available" width="30" height="30">
						</td>
						<td class="cart_unit">
							<span id="" class="price">${{ $item->price }}</span>
						</td>
						<td class="cart_quantity">
							<div id="cart_quantity_button">
							<a rel="nofollow" class="cart_quantity_up" id="cart_quantity_up_2_7" href="" title="Add">	
							<img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/	icon/quantity_up.png" alt="Add">
							</a>
							<input class="cart_quantity_input text" size="2" value="{!! $item->qty !!}" name="quantity_2_7" type="text">
							<a class="cart_quantity_down" rel="nofollow" id="cart_quantity_down_2_7" href="" title="Subtract"><img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/icon/quantity_down.png" alt="Subtract"></a>
							</div>
							<a class="cart_quantity_delete" rel="nofollow" id="2_7" href="/remove_product/{{ $item->rowId }}" title="Delete"><img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/icon/delete-cart.gif" alt="Delete" class="icon"></a>
							<input value="1" name="quantity_2_7_hidden" type="hidden">
						</td>
						<td class="cart_total">
							<span id="" class="price">${{ $item->price*$item->qty  }}</span>
						</td>
					</tr>
				@endforeach	
			</tbody>
			<tfoot>
				<tr class="cart_total_price">
					<td colspan="6">Total products:</td>
					<td id="total_product" class="price">${{ Cart::subtotal() }}</td>					
				</tr>
				<tr class="cart_total_price">
					<td colspan="6">Total shipping:</td>
					<td id="total_product" class="price">$1.00</td>					
				</tr>
				<tr class="cart_total_price">
					<td colspan="6">Estimated Sales Tax:</td>
					<td id="total_product" class="price">$0.00</td>					
				</tr>
				<tr class="cart_total_price">
					<td colspan="6">Total:</td>
					<td id="total_price" class="price">
						<span class="price">${{ Cart::subtotal()  }}</span>
					</td>
				</tr>
			</tfoot>
		</thead>
	</table>
</div>


<p class="cart_navigation">
	@if (Auth::guest())
        <a href="/login" class="exclusive" title="Next" style="padding-top:7px">Next »</a>
    @else
    	<a href="/checkout/address" class="exclusive" title="Next" style="padding-top:7px">Next »</a>
    @endif
	
	<a href="" class="button_large" title="Continue shopping" style="padding-top:7px">« Continue shopping</a>
</p>

@endif
@endsection