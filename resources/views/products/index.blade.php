@extends('layouts.home')
@section('title')
    {{ $product[0]->name }}
@stop
@section('content')
<div class="breadcrumbs bordercolor">
	<div class="breadcrumbs_inner">
		<a href="/" title="return to Home">Home</a>
		<span class="navigation-pipe">></span>
		<span class="navigation_page">{{ $product[0]->name }}</span>
	</div>	
</div>
 <div id="primary_block" class="clearfix">
	<div id="pb-right-column">
		<div id="image-block" class="bordercolor">
			<img src="{{$image[0]->link}}" class="jqzoom" alt="" id="bigpic" width="304" height="464">
		</div>
		<div id="views_block">
			<div id="thumbs_list">
				<ul id="thumbs_list_frame" style="width: 266px;">					
					<li id="thumbnail_16" class="" style="display: list-item;">
						<a href="{{$image[3]->link}}" rel="other-views" class="thickbox bordercolor" title="">
							<img id="thumb_16" src="{{$image[3]->link}}" alt="" width="80" height="80">
						</a>
					</li>

					<li id="thumbnail_17" class="" style="display: list-item;">
						<a href="{{$image[4]->link}}" rel="other-views" class="thickbox bordercolor shown" title="">
							<img id="thumb_17" src="{{$image[4]->link}}" alt="" width="80" height="80">
						</a>
					</li>

					<li id="thumbnail_18" class="thumb_last" style="display: list-item;">
						<a href="{{$image[5]->link}}" rel="other-views" class="thickbox bordercolor" title="">
							<img id="thumb_18" src="{{$image[5]->link}}" alt="" width="80" height="80">
						</a>
					</li>
				</ul>
			</div>
		</div>

		<ul id="usefull_link_block" class="bordercolor">
			<li>
				<a href="">Send to a friend</a>
			</li>
			<li class="print"><a href="javascript:print();">Print</a></li>
		</ul>
	</div>
	<div id="pb-left-column">
		<h1>{{ $product[0]->name }}</h1>
		<br>
		<span id="added" class="our_price_display">
			<span id="our_price_display" class="price" style="display: none">Your product was added to cart</span>
		</span>
		<div id="buy_block" class="bordercolor" >
			
			<div class="price bordercolor">
				<span class="our_price_display" style="float: left;">
					<span id="our_price_display" class="price">${{ $product[0]->price }}</span>
				</span>

				<form class="form-horizontal quantity_wanted_p" role="form" method="POST" action="{{ url('/cart/postCart') }}">
                    {{ csrf_field() }}
                    <p class="hidden">
						<input name="id_product" value="{{ $product[0]->id }}" type="hidden">
						<input name="name_product" value="{{ $product[0]->name }}" type="hidden">
						<input name="price_product"  value="{{ $product[0]->price }}" type="hidden">
					</p>
					<div class="add_to_cart" style="float: right; margin: 0;padding: 0;">
                        <button id="submit" type="submit" class="" style="height: 27px !important;display: inline-block;padding: 0 10px;background: #2e2e2e;border: none;font: 12px Arial !important;color: #fff !important;text-decoration: none !important;text-align: center;cursor: pointer;">
                           Add to cart
                        </button>
                    </div>
                    <div class=" quantity_wanted" style="float: right; margin-right: 10px">
                    		<label style="padding: 6px 7px 0 0;text-align: right;">Quantity:</label>
                            <input id="quantity" type="text" class="" name="quantity" value="1" style="width: 25px;height: 27px;float: right;padding: 5px;text-align: center;" >
                    </div>
                </form>

                <script>
					$(document).ready(function(){
					    $("#submit").click(function(){
					        $("#added").show();
					    });
					});
				</script>
			</div>

			<div class="other_options bordercolor">
				<p class="author">Author: <a href="">Daniel A. Dombrowski</a></p>
				<p class="publisher">Publisher: <a href="">University Of Chicago Press</a></p>
				<p class="date">Publication Date: <strong>April 15, 2009</strong></p>
				<p class="genre">Genre: <a href="">Non-Fiction</a></p>
				<div class="clearblock"></div>
			</div>
			<div id="short_description_block" class="bordercolor">
				<div id="short_description_content" class="rte align_justify">
					The unique smell of old and new pages, soft cover and so on. Yeah, they are worth our admiring. But those times are long gone and we live in 21 century and the most revolutionary thing that had happened is that books have lost their natural view. Books became more available. On-line book stores can offer you a great assortment of books. Can you imagine a world of knowledge without limits?
				</div>
				<p class="buttons_bottom_block">
					<a href="javascript:{}" class="button" style="padding-top:7px">More details</a>
				</p>
			</div>
			<div class="share bordercolor"> 
				<div class="addthis_toolbox addthis_default_style ">
				<a class="addthis_button_facebook_like at300b" fb:like:layout="button_count">
					<div class="fb-like fb_iframe_widget" style="height: 25px;" data-layout="button_count" data-show_faces="false" data-share="true" data-action="like" data-width="90" data-height="25" data-font="arial" data-href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=2" data-send="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=172525162793917&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Flivedemo00.template-help.com%2Fprestashop_39664%2Fproduct.php%3Fid_product%3D2&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;share=true&amp;show_faces=false&amp;width=90"><span style="vertical-align: bottom; width: 104px; height: 20px;"><iframe name="f1242846ca42ea6" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" style="border: medium none; visibility: visible; width: 104px; height: 20px;" src="https://www.facebook.com/v2.6/plugins/like.php?action=like&amp;app_id=172525162793917&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F_IDqWBiKXtV.js%3Fversion%3D42%23cb%3Df18286bb3a878dc%26domain%3Dlivedemo00.template-help.com%26origin%3Dhttp%253A%252F%252Flivedemo00.template-help.com%252Ff6940e8e44c8a%26relation%3Dparent.parent&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Flivedemo00.template-help.com%2Fprestashop_39664%2Fproduct.php%3Fid_product%3D2&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;share=true&amp;show_faces=false&amp;width=90" class="" width="90px" height="25px" frameborder="0"></iframe></span></div>
				</a>
				
				<a class="addthis_button_google_plusone at300b" g:plusone:size="medium">
					<div class="google_plusone_iframe_widget" style="width: 90px; height: 25px;">
						<span>
							<div style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent none repeat scroll 0% 0%; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px;" id="___plusone_0">
								<iframe hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" id="I1_1481642539005" name="I1_1481642539005" src="" data-gapiattached="true" title="+1" width="100%" frameborder="0">
								
								</iframe>
							</div>
						</span>
					</div>
				</a>
				<a class="addthis_counter addthis_pill_style addthis_nonzero" style="display: inline-block;" href="#"><a class="atc_s addthis_button_compact">
					<span>
						
					</span>
				</a>
				<div class="atclear"></div></div>
				<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f419f410efe76d3"></script>
			</div>
			<p id="oosHook" style="display: none;"></p>
		</div>					
	</div>	
</div>
<div >  
  <ul class="nav nav-tabs" style="margin-top:20px ;border: 1px solid #DDDDDD;">
    <li class="active"><a data-toggle="tab" href="#home" style="">More Information</a></li>
    <li><a data-toggle="tab" href="#menu1">Data Sheet</a></li>
    <li><a data-toggle="tab" href="#menu2">Comment</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
   
  </div>
</div>
@endsection
