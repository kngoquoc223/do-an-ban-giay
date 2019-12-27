<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	include "./config.php"; 
	$data = $obj->query("select * from giay ");
	$giay = $data ->fetchALL();	
			if (!isset($_SESSION)) session_start();
			$gh = isset($_SESSION['gh'])?$_SESSION['gh']:array();
			//if (Count($gh)==0) echo "Gio hang rong";
			//var_dump($giay);
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
					<li class="active">Giỏ Hàng</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
			<div class=" cart-items heading">
			 <h3>Giỏ hàng</h3>
				
			<div class="in-check" >
				<ul class="unit">
					<li><span>&nbsp;&nbsp;&nbsp;&nbsp;Item</span></li>
					<li><span>Tên Giày</span></li>		
					<li><span>Giá</span></li>
					<li><span>Size</span></li>
					<li><span>Số lượng</span></li>
					<li> </li>
					<div class="clearfix"> </div>
				</ul>
				<?php foreach ($gh as $key => $value)
				 { 
						foreach ($giay as $k2 => $v2) {
						if($value['ma']==$v2['Ma_Giay']){?>
							<ul class="cart-header">
							<li class="ring-in"><a href="single.php?id=<?php echo $v2['Ma_Giay']; ?>" ><img src="./images/<?php echo $v2['img'] ; ?>" width=100 class="img-responsive" alt=""></a>
							</li>
							<li><?php echo $v2['Ten_Giay']?></li>
							<li><?php $gia= number_format($v2['Gia']);
							echo $gia;?></li>
							<li><?php echo $value['size'] ?></li>
							<li><?php echo $value['soluong']?></li>
							
							<li> <a href="Giohang.php?ac=delete&key=<?php echo $key;?>" class="add-cart cart-check">XÓA</a>&nbsp;&nbsp;&nbsp;&nbsp;
							 <a href="single.php?ac=update&id=<?php echo $v2['Ma_Giay'];?>&key=<?php echo $key;?>" class="add-cart cart-check">SỬA</a></li>
						<div class="clearfix"> </div>
					</ul>
				<?php
			}
		}
		}?>
				<a href="Giohang.php?ac=deleteALL" class="add-cart cart-check">Clean</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="products.php" class="add-cart cart-check">Tiếp tục mua hàng</a>
			</div>
			</div>  
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