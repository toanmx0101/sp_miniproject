
<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/vnd.microsoft.icon" href="http://localhost:8000/vg.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/tab.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/block.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/custom.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/description.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/contact.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/shoppingcart.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/tmivoslider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/form_authentication.css') }}">
</head>

<body id="index">
<div id="wrapper1">
	<div id="wrapper2">
		<div id="wrapper3">
			<div id="header">
				<div id="header_logo">
					<a href="/" title="Book Store">
						<img class="logo" src="http://localhost:8000/icon.png" style="width:212px;height: 212px" alt="Book Store"	>
					</a>
				</div>
				<div id="header_right">
					<div id="tmtextblock">
						<ul>
							<li>
							<span class="tmt_prefix">+84(1235)</span>
							<span class="tmt_number">101-678</span>; </li>
							<li>
							<span class="tmt_prefix">+84(1235)</span>
							<span class="tmt_number">101-678</span> </li>
						</ul>
					</div>
					<div class="clearblock"></div>
					<div id="header_user">
						<ul>

							@if (Auth::guest())
		                        <li><a href="{{ url('/login') }}">Đăng nhập</a></li>
		                        <li><a href="{{ url('/register') }}">Đăng kí</a></li>
		                    @else
		                    	<li id="header_user_info">
									Xin chào,<a href="/my-account"> {{ Auth::user()->name }}</a>
								</li>

                            	<li>
                            		<a href="{{ url('/logout') }}">
                            			<i class="fa fa-btn fa-sign-out"></i>Đăng xuất
                            		</a>
                            	</li>
		                    @endif
							
							
							<li id="shopping_cart">
								<a href="http://localhost:8000/shoppingcart" title="Your Shopping Cart">Giỏ hàng:</a>
								@if (Cart::count() > 0)	
									<span class="ajax_cart_quantity " >{{Cart::count()}}</span>
									@if (Cart::count() == 1)	
										<span class="ajax_cart_product_txt " >sản phẩm</span>
									@else	
										
									@endif	
								@else	
									<span class="ajax_cart_no_product">(rỗng)</span>
								@endif
							</li>
						</ul>
					</div>
					<div class="clearblock"></div>
					<div id="search_block_top">
						<form method="get" action="#" id="searchbox">
							<div>
								<input class="search_query ac_input" id="search_query_top" name="search_query" value="" autocomplete="off" type="text">
								<input name="orderby" value="position" type="hidden">
								<input name="orderway" value="desc" type="hidden">
							</div>
						</form>
					</div>

					<div class="clearblock"></div>
					<ul id="tmheaderlinks">
						<li><a href="http://localhost:8000/" class="active">Trang chủ</a></li>
						<li><a href="http://localhost:8000/specials">Sự kiện đặc biệt</a></li>
						<li><a href="http://localhost:8000/delivery">Vận chuyển</a></li>
						<li><a href="http://localhost:8000/review">Đánh giá</a></li>
					</ul>
				</div>	
			</div>			
			<div id="columns" >
				<div id="left_column" class="column">
					<div id="categories_block_left" class="block">
						<div class="block_content">
						<ul class="tree dynamized" style="display: block;">
							
							<li><a href="http://localhost:8000/category/1">Art, Architecture</a></li>
							<li><a href="http://localhost:8000/category/2">Photograpy</a></li>
							<li><a href="http://localhost:8000/category/3">Bibles & Bibles Studies</a></li>
							<li><a href="http://localhost:8000/category/4">Biographies</a></li>
							<li><a href="http://localhost:8000/category/5">Businees & Money</a></li>
							<li><a href="http://localhost:8000/category/6">Children's Book</a></li>
							<li><a href="http://localhost:8000/category/7">Computing &Internet</a> </li>
							<li><a href="http://localhost:8000/category/8">Cookbooks, Food & Wine</a></li>
							<li><a href="http://localhost:8000/category/9">Craft & Hobbies</a></li>
							<li><a href="http://localhost:8000/category/10">Dies & Hearth</a></li>
							<li><a href="http://localhost:8000/category/11">Education & Teaching</a></li>
							<li><a href="http://localhost:8000/category/12">Fiction & Literature</a></li>
							<li><a href="http://localhost:8000/category/13">Graphic Novels</a></li>
							<li><a href="http://localhost:8000/category/14">History</a></li>
							<li><a href="http://localhost:8000/category/15">Home & Garden</a></li>
							<li><a href="http://localhost:8000/category/16">Humor</a></li>
							<li><a href="http://localhost:8000/category/17">Libros en espacol</a></li>
							<li><a href="http://localhost:8000/category/18">Medicine</a></li>
    						<li><a href="http://localhost:8000/category/19">Mystery & Crime</a></li>
    						<li><a href="http://localhost:8000/category/20">Nonfiction</a></li>
    						<li><a href="http://localhost:8000/category/21">Politics & Current Events</a></li>
    						<li><a href="http://localhost:8000/category/22">Psychology</a></li>
						</ul>							
						</div>
					</div>
					<div id="cart_block" class="block exclusive">
						<h4><a href="http://localhost:8000/cart">Cart</a></h4>						
						<div class="block_content">
							<div id="cart_block_list" class="expanded">
								@if (Cart::count() >0)

									@foreach (Cart::content() as $item)
									<dl class="products">
										<dt id="cart_block_product_2_7" class="first_item">
										<span class="quantity-formated">
											<span class="quantity">{{ $item->qty }}</span>x
										</span>
										<a class="cart_block_product_name" href="" title="{{  $item->name  }}" style="color: #FFFFFF">
										{{  substr( $item->name , 0, 10)}}</a>
										<span class="remove_link">

											<a class="ajax_cart_block_remove_link" rel="nofollow" href="/remove_product/{{ $item->rowId }}"> </a>
										</span>
										<span class="price">${{ $item->qty*$item->price }}</span>
										</dt>
										</dd> 
											 
									</dl>
									@endforeach
								@else	
									<p id="cart_block_no_products">No products</p>
								@endif	
								<p id="cart_block_no_products"></p>	
								<div class="cart-prices">
									<div class="cart-prices-block">
										<span>Shipping</span>
										<span id="cart_block_shipping_cost" class="price ajax_cart_shipping_cost">$0.00</span>
									</div>
									<div class="cart-prices-block">
										<span>Total</span>
										<span id="cart_block_total" class="price ajax_block_cart_total">$0.00</span>
									</div>
								</div>
								<p id="cart-buttons">
								<a href="http://localhost:8000/shoppingcart" class="btn_cart" title="Cart">Cart</a> <a href="http://localhost:8000/shoppingcart" class="btn_checkout" title="Check out">Check out</a>
								</p>
							</div>
						</div>
					</div>	
				</div>
				<div id="center_column" class="center_column">
					@yield('content')
				</div>
			</div>
			
			<div id="footer">
				<div id="tmfooterlinks">
					<div id="tmfooterlinks_logo">
						<a href="">
							<img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/footer_logo.jpg?1340085071" alt="Book Store">
						</a>
					</div>
					<ul>
						<li><a href="">Contact</a></li>
						<li><a href="">Sitemap</a></li>
						<li><a href="">Legal Notice</a></li>
						<li><a href="">Terms and condition</a></li>
						<li><a href="">About us</a></li>
					</ul>
					<ul>
						<li><a href="">Your Account</a></li>
						<li><a href="">Persional Information</a></li>
						<li><a href="">Addresses</a></li>
						<li><a href="">Discount</a></li>
						<li><a href="">Order History</a></li>
					</ul>
					<ul>
						<li><a href="">New product</a></li>
						<li><a href="">Top seller</a></li>
						<li><a href="">Specials</a></li>
						<li><a href="">Manufactures</a></li>
						<li><a href="">Suppliers</a></li>
					</ul>
					<p>© 2016 Powered by <a href="">PHP Fucking Team</a>™. All rights reserved</p>
				</div>
			</div>
		</div>
	</div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/ajax-cart.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/cookies.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/tools.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/treeManagement.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/nivo.slider.js') }}"></script>


</body>
</html>
