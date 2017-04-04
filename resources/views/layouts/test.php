<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Book Store</title>
	<meta name="description" content="Shop powered by PrestaShop"/>
	<meta name="keywords" content="shop, prestashop"/>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8"/><script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"fab66fa7732f550c27c75483eb38284b",petok:"8021d5ef3d5558b77c98aad9855c7236b22aa3ac-1480419160-1800",zone:"template-help.com",rocket:"0",apps:{"abetterbrowser":{"ie":"7"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=088620b277/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(u(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(2),u=t(3),c=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit"],p="api-",l=p+"ixn-";a(s,function(t,e){f[e]=o(p+e,!0,"api")}),f.addPageAction=o(p+"addPageAction",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){d[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],2:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],3:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?u(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var s=f[m[n]];return s&&s.push([w,n,r,i]),i}function p(t,e){g[t]=l(t).concat(e)}function l(t){return g[t]||[]}function d(t){return s[t]=s[t]||o(n)}function v(t,e){c(t,function(t,n){e=e||"feature",m[n]=e,e in f||(f[e]=[])})}var g={},m={},w={on:p,emit:n,get:d,listeners:l,context:e,buffer:v};return w}function i(){return new r}var a="nr@context",u=t("gos"),c=t(2),f={},s={},p=e.exports=o();p.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!h++){var t=y.info=NREUM.info,e=s.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(m,function(e,n){t[e]||(t[e]=n)});var n="https"===g.split(":")[0]||t.sslForHttp;y.proto=n?"https://":"http://",u("mark",["onload",a()],null,"api");var r=s.createElement("script");r.src=y.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===s.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=t("handle"),c=t(2),f=window,s=f.document,p="addEventListener",l="attachEvent",d=f.XMLHttpRequest,v=d&&d.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:d,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(1);var g=""+location,m={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-974.min.js"},w=d&&v&&v[p]&&!/CriOS/.test(navigator.userAgent),y=e.exports={offset:a(),origin:g,features:{},xhrWrappable:w};s[p]?(s[p]("DOMContentLoaded",i,!1),f[p]("load",r,!1)):(s[l]("onreadystatechange",o),f[l]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);</script>
<meta name="generator" content="PrestaShop"/>
<meta name="robots" content="index,follow"/>
<link rel="icon" type="image/vnd.microsoft.icon" href="http://livedemo00.template-help.com/prestashop_39664/img/favicon.ico?1340085071"/>
<link rel="shortcut icon" type="image/x-icon" href="http://livedemo00.template-help.com/prestashop_39664/img/favicon.ico?1340085071"/>
<script type="text/javascript">
	var baseDir = 'http://livedemo00.template-help.com/prestashop_39664/';
	var static_token = '5d5b1c9c897a61080f35ef3a14d1f606';
	var token = 'bf0a5b9eb4941cef94ab7d41c875ed83';
	var priceDisplayPrecision = 2;
	var priceDisplayMethod = 1;
	var roundMode = 2;
</script>
<link href="/prestashop_39664/themes/theme396/css/global.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/prestashop_39664/css/jquery.autocomplete.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="/prestashop_39664/js/jquery/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="/prestashop_39664/js/jquery/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/prestashop_39664/js/tools.js"></script>
<script type="text/javascript" src="/prestashop_39664/modules/blockcart/ajax-cart.js"></script>
<script type="text/javascript" src="/prestashop_39664/themes/theme396/js/tools/treeManagement.js"></script>
<script type="text/javascript" src="/prestashop_39664/js/jquery/jquery.autocomplete.js"></script>
<script type="text/javascript" src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/js/cookies.js"></script>
<script type="text/javascript" src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/js/script.js"></script>
</script> <script type="text/javascript" src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/js/jscript_xjquery.jqtransform.js"></script>
</head>
<body id="index">
	<!--[if lt IE 8]><div style='clear:both;height:59px;padding:0 15px 0 15px;position:relative;z-index:10000;text-align:center;'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div><![endif]-->
	<p id="back-top"> <a href="#top"><span></span></a> </p>
	<div id="wrapper1">
		<div id="wrapper2">
			<div id="wrapper3">
				
				<div id="header">
					<div id="header_logo">
						<a href="http://livedemo00.template-help.com/prestashop_39664/" title="Book Store">
							<img class="logo" src="http://livedemo00.template-help.com/prestashop_39664/img/logo.jpg?1340085071" alt="Book Store"/>
						</a>
					</div>
					<div id="header_right">
						<div id="tmtextblock">
							<ul>
								<li>
									<span class="tmt_prefix">+1(234)</span>
									<span class="tmt_number">567-8901</span>; </li>
									<li>
										<span class="tmt_prefix">+1(234)</span>
										<span class="tmt_number">567-8902</span> </li>
									</ul>
								</div> 
								<div class="clearblock"></div>
								<div id="languages_block_top">
									<ul id="first-languages">
										<li class="selected_language">
											en
										</li>
										<li>
											<a href="http://livedemo00.template-help.com/prestashop_39664/?id_lang=2" title="Français (French)">
												fr
											</a>
										</li>
										<li>
											<a href="http://livedemo00.template-help.com/prestashop_39664/?id_lang=3" title="Español (Spanish)">
												es
											</a>
										</li>
									</ul>
								</div>
								
								<div id="currencies_block_top">
									<form id="setCurrency" action="/prestashop_39664/" method="post">
										<label>Currency:</label>
										<select onchange="setCurrency(this.value);">
											<option value="2" selected="selected">Dollar</option>
											<option value="1">Euro</option>
											<option value="3">Pound</option>
										</select>
										<input type="hidden" name="id_currency" id="id_currency" value=""/>
										<input type="hidden" name="SubmitCurrency" value=""/>
									</form>
								</div>
								
								<div id="header_user">
									<ul>
										<li id="header_user_info">
											Welcome,
											(&nbsp;<a href="http://livedemo00.template-help.com/prestashop_39664/my-account.php">Log in</a>&nbsp;)
										</li>
										<li id="your_account"><a href="http://livedemo00.template-help.com/prestashop_39664/my-account.php" title="Your Account">Your Account</a></li>
										<li id="shopping_cart">
											<a href="http://livedemo00.template-help.com/prestashop_39664/order.php" title="Your Shopping Cart">Cart:</a>
											<span class="ajax_cart_quantity hidden">0</span>
											<span class="ajax_cart_product_txt hidden">product</span>
											<span class="ajax_cart_product_txt_s hidden">products</span>
											<span class="ajax_cart_no_product">(empty)</span>
										</li>
									</ul>
								</div>
								
								<div class="clearblock"></div>
								<div id="search_block_top">
									<form method="get" action="http://livedemo00.template-help.com/prestashop_39664/search.php" id="searchbox">
										<div>
											<input class="search_query" type="text" id="search_query_top" name="search_query" value=""/>
											<input type="hidden" name="orderby" value="position"/>
											<input type="hidden" name="orderway" value="desc"/>
										</div>
									</form>
								</div>
								<script type="text/javascript">
	// <![CDATA[
	
	$('document').ready( function() {
		$("#search_query_top")
		.autocomplete(
			'http://livedemo00.template-help.com/prestashop_39664/search.php', {
				minChars: 3,
				max: 10,
				width: 500,
				selectFirst: false,
				scroll: false,
				dataType: "json",
				formatItem: function(data, i, max, value, term) {
					return value;
				},
				parse: function(data) {
					var mytab = new Array();
					for (var i = 0; i < data.length; i++)
						mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
					return mytab;
				},
				extraParams: {
					ajaxSearch: 1,
					id_lang: 1
				}
			}
			)
		.result(function(event, data, formatted) {
			$('#search_query_top').val(data.pname);
			document.location.href = data.product_link;
		})
	});
	
	// ]]>
</script>
<div class="clearblock"></div>
<ul id="tmheaderlinks">
	<li><a href="http://livedemo00.template-help.com/prestashop_39664/" class="active">home</a></li>
	<li><a href="http://livedemo00.template-help.com/prestashop_39664/prices-drop.php">specials</a></li>
	<li><a href="http://livedemo00.template-help.com/prestashop_39664/cms.php?id_cms=1">Delivery</a></li>
	<li><a href="http://livedemo00.template-help.com/prestashop_39664/contact-form.php">contact</a></li>
</ul>
</div>
</div>
<div id="columns">
	
	<div id="left_column" class="column"> 
		<div id="categories_block_left" class="block">
			<h4>Categories</h4>
			<div class="block_content">
				<ul class="tree dhtml">
					<li>
						<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=2" title="Well, reading books as a...">Art, Architecture</a>
						<ul>
							<li>
								<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=3" title="For a long period of time...">Etur adipisicing eli</a>
							</li> <li class="last">
							<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=4" title="Just remember that special...">Sed do eiusmod tempor </a>
						</li> </ul>
					</li> <li>
					<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=5" title="The unique smell of old and...">Photography</a>
				</li> <li>
				<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=6" title="But those times are long...">Bibles &amp; Bible Studies</a>
			</li> <li>
			<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=7" title="On-line book stores can...">Biographies</a>
		</li> <li>
		<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=8" title="You can get everything you...">Business &amp; Money</a>
	</li> <li>
	<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=9" title="Actually we do understand...">Children&#039;s Books</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=10" title="That is why we have such a...">Computing &amp; Internet</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=11" title="We all must remember that...">Cookbooks, Food &amp; Wine</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=12" title="Our company guarantees the...">Crafts &amp; Hobbies</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=13" title="Well, reading books as a...">Diet &amp; Health</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=14" title="For a long period of time...">Education &amp; Teaching</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=15" title="Just remember that special...">Fiction &amp; Literature</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=16" title="The unique smell of old and...">Graphic Novels</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=17" title="But those times are long...">History</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=18" title="On-line book stores can...">Home &amp; Garden</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=19" title="You can get everything you...">Humor</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=20" title="Actually we do understand...">Libros en espacol</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=21" title="That is why we have such a...">Medicine</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=22" title="We all must remember that...">Mystery &amp; Crime</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=23" title="Our company guarantees the...">Nonfiction</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=24" title="Well, reading books as a...">Politics &amp; Current Events</a>
</li> <li>
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=25" title="For a long period of time...">Psychology</a>
</li> <li class="last">
<a href="http://livedemo00.template-help.com/prestashop_39664/category.php?id_category=26" title="Just remember that special...">Religion</a>
</li> </ul>
<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
	</script>
</div>
</div>
<script type="text/javascript">
	var CUSTOMIZE_TEXTFIELD = 1;
	var customizationIdMessage = 'Customization #';
	var removingLinkText = 'remove this product from my cart';
</script>

<div id="cart_block" class="block exclusive">
	<h4>
		<a href="http://livedemo00.template-help.com/prestashop_39664/order.php">Cart</a>
		<span id="block_cart_expand" class="hidden">&nbsp;</span>
		<span id="block_cart_collapse">&nbsp;</span>
	</h4>
	<div class="block_content">
		
		<div id="cart_block_summary" class="collapsed">
			<span class="ajax_cart_quantity" style="display:none;">0</span>
			<span class="ajax_cart_product_txt_s" style="display:none">products</span>
			<span class="ajax_cart_product_txt">product</span>
			<span class="ajax_cart_total" style="display:none">$0.00</span>
			<span class="ajax_cart_no_product">(empty)</span>
		</div>
		
		<div id="cart_block_list" class="expanded">
			<p id="cart_block_no_products">No products</p>
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
				<a href="http://livedemo00.template-help.com/prestashop_39664/order.php" class="btn_cart" title="Cart">Cart</a> <a href="http://livedemo00.template-help.com/prestashop_39664/order.php?step=1" id="button_order_cart" class="btn_checkout" title="Check out">Check out</a>
			</p>
		</div>
	</div>
</div>
</div>

<div id="center_column" class="center_column">
	<script type="text/javascript" src="/prestashop_39664/modules/tmnivoslider/js/nivo.slider.js"></script>
	<div id="tmnivoslider">
		<div id="slider">
			<a href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=12"><img src="http://livedemo00.template-help.com/prestashop_39664/modules/tmnivoslider/slides/slide_00.jpg" alt="" title="#htmlcaption1"/></a>
			<a href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=20"><img src="http://livedemo00.template-help.com/prestashop_39664/modules/tmnivoslider/slides/slide_01.jpg" alt="" title="#htmlcaption2"/></a>
			<a href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=7"><img src="http://livedemo00.template-help.com/prestashop_39664/modules/tmnivoslider/slides/slide_02.jpg" alt="" title="#htmlcaption3"/></a>
			<a href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=15"><img src="http://livedemo00.template-help.com/prestashop_39664/modules/tmnivoslider/slides/slide_03.jpg" alt="" title="#htmlcaption4"/></a>
		</div>
		<div id="htmlcaption1" class="nivo-html-caption">
			<h2>Contemporary Athletics And Ancient Greek Ideals</h2>
			<h3 class="author">Author: <span>Daniel A. Dombrowski</span></h3>
			<h3 class="publisher">Publisher: <span>University Of Chicago Press</span></h3>
			<h3 class="date">Publication Date: <span>April 15, 2009</span></h3>
			<h3 class="genre">Genre: <span>Non-Fiction</span></h3>
			<h4>
				<span class="slide_price">$25.89</span>
				<a href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=12" class="slide_btn">Shop Now!</a>
			</h4>
		</div>
		<div id="htmlcaption2" class="nivo-html-caption">
			<h2>Mandela</h2>
			<h3 class="author">Author: <span>Daniel A. Dombrowski</span></h3>
			<h3 class="publisher">Publisher: <span>University Of Chicago Press</span></h3>
			<h3 class="date">Publication Date: <span>April 15, 2009</span></h3>
			<h3 class="genre">Genre: <span>Non-Fiction</span></h3>
			<h4>
				<span class="slide_price">$25.89</span>
				<a href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=20" class="slide_btn">Shop Now!</a>
			</h4>
		</div>
		<div id="htmlcaption3" class="nivo-html-caption">
			<h2>Thy Neighbor's Wife</h2>
			<h3 class="author">Author: <span>Daniel A. Dombrowski</span></h3>
			<h3 class="publisher">Publisher: <span>University Of Chicago Press</span></h3>
			<h3 class="date">Publication Date: <span>April 15, 2009</span></h3>
			<h3 class="genre">Genre: <span>Non-Fiction</span></h3>
			<h4>
				<span class="slide_price">$25.89</span>
				<a href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=7" class="slide_btn">Shop Now!</a>
			</h4>
		</div>
		<div id="htmlcaption4" class="nivo-html-caption">
			<h2>Black Seconds</h2>
			<h3 class="author">Author: <span>Daniel A. Dombrowski</span></h3>
			<h3 class="publisher">Publisher: <span>University Of Chicago Press</span></h3>
			<h3 class="date">Publication Date: <span>April 15, 2009</span></h3>
			<h3 class="genre">Genre: <span>Non-Fiction</span></h3>
			<h4>
				<span class="slide_price">$25.89</span>
				<a href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=15" class="slide_btn">Shop Now!</a>
			</h4>
		</div>
	</div>
	<script type="text/javascript">

		$(window).load(function() {
			$('#slider').nivoSlider({
		effect:'fade', //Specify sets like: 'fold,fade,sliceDown'
		slices:10,
		animSpeed:500, //Slide transition speed
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:true, //Next & Prev
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
      	controlNavThumbsFromRel:false, //Use image rel for thumbs
		controlNavThumbsSearch: '.jpg', //Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
		keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:1.0, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
		});

	</script> 
	<div id="featured_products">
		<h4>Featured products</h4>
		<div class="block_content">
			<ul>
				<li class="ajax_block_product feat_first_line">
					<a class="product_image" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=1" title="Dick Morris Hardcover Collection"><img src="http://livedemo00.template-help.com/prestashop_39664/img/p/1-1-home.jpg" alt="Dick Morris Hardcover Collection"/></a>
					<h5><a class="product_link" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=1" title="Dick Morris Hardcover Collection">Dick Morris Hardcover Collection</a></h5>
					<div>
						<span class="price">$15.00</span>
						<a class="feat_view" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=1" title="View">View</a>
					</div>
				</li>
				<li class="ajax_block_product feat_first_line">
					<a class="product_image" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=2" title="Harry Potter and the Chamber of Secrets"><img src="http://livedemo00.template-help.com/prestashop_39664/img/p/2-4-home.jpg" alt="Harry Potter and the Chamber of Secrets"/></a>
					<h5><a class="product_link" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=2" title="Harry Potter and the Chamber...">Harry Potter and the Chamber of Secrets</a></h5>
					<div>
						<span class="price">$50.00</span>
						<a class="feat_view" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=2" title="View">View</a>
					</div>
				</li>
				<li class="ajax_block_product feat_first_line">
					<a class="product_image" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=3" title="The Chronicles of Narnia"><img src="http://livedemo00.template-help.com/prestashop_39664/img/p/3-7-home.jpg" alt="The Chronicles of Narnia"/></a>
					<h5><a class="product_link" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=3" title="The Chronicles of Narnia">The Chronicles of Narnia</a></h5>
					<div>
						<span class="price">$31.50</span>
						<a class="feat_view" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=3" title="View">View</a>
					</div>
				</li>
				<li class="ajax_block_product feat_first_line feat-4">
					<a class="product_image" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=4" title="The Mayor&#039;s Tongue by Nathaniel Rich"><img src="http://livedemo00.template-help.com/prestashop_39664/img/p/4-10-home.jpg" alt="The Mayor&#039;s Tongue by Nathaniel Rich"/></a>
					<h5><a class="product_link" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=4" title="The Mayor&#039;s Tongue by...">The Mayor&#039;s Tongue by Nathaniel Rich</a></h5>
					<div>
						<span class="price">$29.00</span>
						<a class="feat_view" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=4" title="View">View</a>
					</div>
				</li>
				<li class="ajax_block_product">
					<a class="product_image" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=5" title="Five Novels by Charles Dickens"><img src="http://livedemo00.template-help.com/prestashop_39664/img/p/5-13-home.jpg" alt="Five Novels by Charles Dickens"/></a>
					<h5><a class="product_link" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=5" title="Five Novels by Charles Dickens">Five Novels by Charles Dickens</a></h5>
					<div>
						<span class="price">$63.00</span>
						<a class="feat_view" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=5" title="View">View</a>
					</div>
				</li>
				<li class="ajax_block_product">
					<a class="product_image" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=6" title="Dick Morris Hardcover Collection"><img src="http://livedemo00.template-help.com/prestashop_39664/img/p/6-16-home.jpg" alt="Dick Morris Hardcover Collection"/></a>
					<h5><a class="product_link" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=6" title="Dick Morris Hardcover Collection">Dick Morris Hardcover Collection</a></h5>
					<div>
						<span class="price">$49.00</span>
						<a class="feat_view" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=6" title="View">View</a>
					</div>
				</li>
				<li class="ajax_block_product">
					<a class="product_image" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=7" title="The Divine Comedy by Dante"><img src="http://livedemo00.template-help.com/prestashop_39664/img/p/7-19-home.jpg" alt="The Divine Comedy by Dante"/></a>
					<h5><a class="product_link" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=7" title="The Divine Comedy by Dante">The Divine Comedy by Dante</a></h5>
					<div>
						<span class="price">$62.00</span>
						<a class="feat_view" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=7" title="View">View</a>
					</div>
				</li>
				<li class="ajax_block_product feat-4">
					<a class="product_image" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=8" title="Seven Novels by Jules Verne"><img src="http://livedemo00.template-help.com/prestashop_39664/img/p/8-22-home.jpg" alt="Seven Novels by Jules Verne"/></a>
					<h5><a class="product_link" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=8" title="Seven Novels by Jules Verne">Seven Novels by Jules Verne</a></h5>
					<div>
						<span class="price">$73.00</span>
						<a class="feat_view" href="http://livedemo00.template-help.com/prestashop_39664/product.php?id_product=8" title="View">View</a>
					</div>
				</li>
			</ul>
			<div class="clearblock"></div>
		</div>
	</div>
</div>
<div class="clearblock"></div>
</div>

<div id="footer">
	<div id="tmfooterlinks">
		<div id="tmfooterlinks_logo">
			<a href="http://livedemo00.template-help.com/prestashop_39664/">
				<img src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/img/footer_logo.jpg?1340085071" alt="Book Store"/>
			</a>
		</div>
		<ul>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/contact-form.php">Contact</a></li>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/sitemap.php">Sitemap</a></li>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/cms.php?id_cms=2">Legal Notice</a></li>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/cms.php?id_cms=3">Terms and conditions</a></li>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/cms.php?id_cms=4">About us</a></li>
		</ul>
		<ul>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/my-account.php">Your Account</a></li>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/identity.php">Personal information</a></li>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/addresses.php">Addresses</a></li>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/discount.php">Discount</a></li>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/history.php">Order history</a></li>
		</ul>
		<ul>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/new-products.php">New products</a></li>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/best-sales.php">Top sellers</a></li>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/prices-drop.php">Specials</a></li>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/manufacturer.php">Manufacturers</a></li>
			<li><a href="http://livedemo00.template-help.com/prestashop_39664/supplier.php">Suppliers</a></li>
		</ul>
		<p>&copy; 2016 Powered by <a href="http://www.prestashop.com">PrestaShop</a>&trade;. All rights reserved</p>
	</div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="http://livedemo00.template-help.com/prestashop_39664/themes/theme396/js/ga.js"></script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"72d7dcce33","applicationID":"1388850","transactionName":"ZV1TZ0FTVkFVWkwKXlwXZEFaHUhAUUpMAkJaV0FsAAsOBAAWUQ1VV0AfQ1tC","queueTime":0,"applicationTime":5346,"atts":"SRpQEQlJRU8=","errorBeacon":"bam.nr-data.net","agent":""}</script></body> <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>