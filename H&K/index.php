<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include "./config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>The Shoe - H&K</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>	
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>				
</head>
<body> 
	<!--top-header-->
	<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-header-left">
				<div class="search-bar">
					<input type="text" value="Tìm kiếm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tìm kiếm';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="col-md-4 top-header-middle">
				<h1><a href="index.html">H&K</a></h1>	
			</div>
			<div class="col-md-4 top-header-right">
				<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart-1.png" alt="" />
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--top-header-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="index.php">Home</a></li>
					<li class="grid"><a href="products.php">Thương Hiệu</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Thương hiệu</h4>
									<ul>
										<li><a href="products.php?maTH=NB">New Balance</a></li>
										<li><a href="products.php?maTH=FL">Fila</a></li>
										<li><a href="products.php?maTH=CV">Converse</a></li>
										<li><a href="products.php?maTH=VS">Vans</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="products.php">Sản phẩm</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one" >
									<h4>Sản phẩm</h4>
									<ul>
										<li><a href="products.php?maL=LS">Life style</a></li>
										<li><a href="products.php?maL=SP">Sport</a></li>
										<li><a href="products.php?maL=SD">Sandals</a></li>
								</div>
							</div>
						</div>
					</li>
					<li class="active"><a href="products.php?HOT=1">Hot</a></li>
					<li class="active"><a href="login.php">admin</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--bottom-header-->
	<!--banner-starts-->
	<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
			    <li>
					<div class="banner-1"></div>
				</li>
				<li>
					<div class="banner-2"></div>
				</li>
				<li>
					<div class="banner-3"></div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends--> 
	<!--Slider-Starts-Here-->
				<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
	<!--start-banner-bottom--> 
	<?php
			$data = $obj->query("select * from giay");
			$datahot = $obj->query("select * from giay where Hot = 1 ");
			$DatHot = $datahot ->fetchAll();	
			$giay = $data ->fetchAll();	 
			$rand_key= array_rand($DatHot,2);
 		?>
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-top">
				<div class="col-md-6 banner-bottom-left">
					<div class="bnr-one">
						<div class="bnr-left">
							<h1><a href="single.php?id=<?php echo $DatHot[$rand_key[0]]['Ma_Giay']; ?>"><?php echo $DatHot[$rand_key[0]]['Ten_Giay']; ?></a></h1>
							<p>Sản phẩm đang HOT</p>
							<div class="b-btn"> 
								<a href="single.php?id=<?php echo $DatHot[$rand_key[0]]['Ma_Giay']; ?>">MUA HÀNG</a>
							</div>
						</div>
						<div class="bnr-right"> 
							<a href="single.php?id=<?php echo $DatHot[$rand_key[0]]['Ma_Giay']; ?>">
								<img  src="images/<?php echo $DatHot[$rand_key[0]]["img"]; ?>" alt=""  width=238 height=218 /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 banner-bottom-right">
					<div class="bnr-two">
						<div class="bnr-left">
							<h1><a href="single.php?id=<?php echo $DatHot[$rand_key[1]]['Ma_Giay']; ?>"><?php echo $DatHot[1]['Ten_Giay']; ?></a></h1>
							<p>Sản phẩm đang HOT</p>
							<div class="b-btn"> 
								<a href="single.php?id=<?php echo $DatHot[$rand_key[1]]['Ma_Giay']; ?>">MUA HÀNG</a>
							</div>
						</div>
						<div class="bnr-right"> 
							<a href="single.php?id=<?php echo $DatHot[$rand_key[1]]['Ma_Giay']; ?>">
								<img  src="images/<?php echo $DatHot[$rand_key[1]]["img"]; ?>" alt="" width=238 height=218 /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-banner-bottom--> 
	<!--start-shoes--> 
	
	<div class="shoes"> 
		<div class="container"> 
			<?php 
			$rand_key= array_rand($giay,4);
			for($i=0;$i<=3;$i++) {
								?>
			<div class="product-one">
				<div class="col-md-3 product-left"> 
					<div class="p-one simpleCart_shelfItem">							
							<a href="single.php?id=<?php echo $giay[$rand_key[$i]]['Ma_Giay']; ?>">
								<img  src="images/<?php echo $giay[$rand_key[$i]]["img"]; ?>" alt="" />
								<div class="mask">
									<span>XEM NHANH</span>
								</div>
							</a>
						<h4><?php
								echo $giay[$rand_key[$i]]["Ten_Giay"];
							?></h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $giay[$rand_key[$i]]["Gia"]; ?>₫</span></a></p>
					
					</div>
				</div>
				<?php }
					?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-shoes-->
	<!--start-abt-shoe-->
	<div class="abt-shoe">
		<div class="container"> 
			<div class="abt-shoe-main">
				<div class="col-md-4 abt-shoe-left">
					<div class="abt-one">
						<a href="products.php"><img src="images/abt-1.jpg" alt="" /></a>
						<h4><a href="products.php">Đa dạng sản phẩm</a></h4>
						<p>Website sẽ luôn có những mẫu giày mới, khó tìm, hot nhất hiện nay với đủ loại mẫu mã, thương hiệu cho người dùng lựa chọn. </p>
					</div>
				</div>
				<div class="col-md-4 abt-shoe-left">
					<div class="abt-one">
						<a href="products.php"><img src="images/abt-2.jpg" alt="" /></a>
						<h4><a href="products.php">Uy tính, chất lượng</a></h4>
						<p>H&K là hệ thống bán giày lâu năm, uy tính nhất trên thị trường, được thành lập từ tháng 10/2019. Websaite đã bán hơn hàng ngàn sản phẩm các loại và đáp ứng đầy đủ nhu cầu của người tiêu dùng. </p>
					</div>
				</div>
				<div class="col-md-4 abt-shoe-left">
					<div class="abt-one">
						<a href="products.php"><img src="images/abt-3.jpg" alt="" /></a>
						<h4><a href="products.php">Luôn xem khách hàng là thượng đế</a></h4>
						<p>.Chúng tôi có đội ngũ nhân viên sẵn sàn hỗ trợ khách hàng 24/7, luôn lắng nghe phẩn hỏi của khách hàng, đăng chất lượng làm mục tiêu phát triễn của công ty. Sự hài lòng của khách hàng là động lực để website phát triễn. </p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-abt-shoe-->
	<!--start-footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-3 footer-left">
					<h3>Về H&K</h3>
					<ul>
						<li><a href="#">Câu chuyển về H&K</a></li>
						<li><a href="contact.html">Bước phát triển </a></li>
						<li><a href="#">Hoạt động </a></li>				 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>Trợ giúp</h3>
					<ul>
						<li><a href="account.html">Hình thức giao hàng</a></li>
						<li><a href="#">Hình thức thanh toán</a></li>
						<li><a href="contact.html">Chích sách bảo hành</a></li>
						<li><a href="#">Chích sách đổi trả</a></li>					 					 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>Loại Sản Phẩm</h3>
					<ul>
						<li><a href="#">Running</a></li>
						<li><a href="#">Gym & Training</a></li>
						<li><a href="#">Basketball</a></li>
						<li><a href="#">Lifestyle</a></li>			 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>Thông Tin</h3>
					<ul>
						<li><a href="#">Địa chỉ: 22 Lý Chiêu Hoàng, Phường 10, Quận 6, TP HCM</a></li>
						<li><a href="#">Sđt: (028) 38 753 443</a></li>
						<li><a href="#">Email: kngoquoc223@gmail.com</a></li>
						<li><a href="#">Hotline : 19002126</a></li>		 
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-footer-->
	<!--end-footer-text-->
	<div class="footer-text">
		<div class="container">
			<div class="footer-main">
				<p class="footer-class">© Design by Team <a href="http://w3layouts.com/" target="_blank"> HUY & KHÁNH</a> </p>
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-text-->	
</body>
</html>