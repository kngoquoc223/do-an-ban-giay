<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	include "./config.php"; 
if (!isset($_SESSION)) session_start();
$gh = isset($_SESSION['gh'])?$_SESSION['gh']:array();
  	$id = $_GET['id'];
	$data = $obj->query("select * from giay where Ma_Giay= '$id' ");
	$giay = $data ->fetch();	
	
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Free Style A Ecommerce Category Flat Bootstarp Resposive Website Template | Single :: w3layouts</title>
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
				<h1><a href="index.php">H&K</a></h1>	
			</div>
			<div class="col-md-4 top-header-right">
				<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							 (<span id="simpleCart_quantity" ><?php echo count($gh);?></span> items)</div>
							<img src="images/cart-1.png" alt="" />
						</a>
						
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
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active"><?php echo $giay['Ten_Giay']; ?></li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-9 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/<?php echo $giay['img']; ?>">
									<img src="images/<?php echo $giay['img']; ?>" />
								</li>
							</ul>
						</div>
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
				</div>	
				<div class="col-md-7 single-top-right">
					<div class="details-left-info simpleCart_shelfItem">
						<h3><?php echo $giay['Ten_Giay']; ?></h3>
						<p class="availability">Tình trạng: 
							<span class="color"> 
								<?php 
									if($giay['Ton_kho']!=0)		
										echo "Còn hàng";
									else
										echo "Hết hàng";
								?>
							</span>
						</p>
						<div class="price_single">
						<!-- 	<span class="reducedfrom">1,850,000₫</span> -->
							<span class="actual item_price"><?php echo $giay['Gia']; ?>₫</span>
						</div>
						<h2 class="quick">Thông tin chi tiết:</h2>
						<p class="quick_desc"> Đang cập nhật</p>
						<div class="clearfix"> </div>
						<form action="Giohang.php" >
						Số lượng: <input type="number" name="sl" value="1"></br></br>
						Size: <select name="size" >
    					<option value="38" >38</option>
    					<option value="39" >39</option>
    					<option value="40" >40</option>
    					<option value="41" >41</option>
    					<option value="42" >42</option>
							</select>
						<input type="hidden" name="ma" value="<?php echo $giay['Ma_Giay'] ?>">
						<input type="hidden" name="ac" value="add">
						<div class="single-but item_add">
					<input type="submit" value="Thêm vào GH" name="submit">
				</div>
			</form>
					<div class="clearfix"> </div>
				
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php
			$data2 = $obj->query("select * from giay");
			$giayran = $data2 ->fetchAll();	
 		?>
					<div class="latest products">
						<?php 
			$rand_key= array_rand($giayran,3);
			for($i=0;$i<=2;$i++) {
								?>
						<div class="product-one">
							<div class="col-md-4 product-left single-left"> 
					<div class="p-one simpleCart_shelfItem">							
							<a href="single.php?id=<?php echo $giayran[$rand_key[$i]]['Ma_Giay']; ?>">
								<img  src="images/<?php echo $giayran[$rand_key[$i]]["img"]; ?>" alt="" />
								<div class="mask">
									<span>XEM NHANH</span>
								</div>
							</a>
						<h4><?php
								echo $giayran[$rand_key[$i]]["Ten_Giay"];
							?></h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $giayran[$rand_key[$i]]["Gia"]; ?>₫</span></a></p>
					
					</div>
				</div>
				<?php }
					?>
				<div class="clearfix"> </div>
				</div>
					</div>
</div>
					</div>
					</div>


				<div class="col-md-3 single-right">
					<h3>DANH MỤC</h3>
					<ul class="product-categories">
						<li><a href="#">Sản phẩm mới</a> <span class="count">(14)</span></li>
						<li><a href="#">Sale</a> <span class="count">(2)</span></li>
						<li><a href="#">Nam</a> <span class="count">(2)</span></li>
						<li><a href="#">Nữ</a> <span class="count">(11)</span></li>
						<li><a href="#">Trẻ em</a> <span class="count">(3)</span></li>
					</ul>
					
					<h3>giá</h3>
					<ul class="product-categories p1">
						<li><a href="#">600$-700$</a> <span class="count">(14)</span></li>
						<li><a href="#">700$-800$</a> <span class="count">(2)</span></li>
						<li><a href="#">800$-900$</a> <span class="count">(2)</span></li>
						<li><a href="#">900$-1000$</a> <span class="count">(8)</span></li>
						<li><a href="#">1000$-1100$</a> <span class="count">(11)</span></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-single-->
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
				<p class="footer-class">© 2015 Free Style All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
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