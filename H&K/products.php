<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
 include "./config.php"; 
function getIndex($index, $value="")
			{
				if (!isset($_GET[$index]))	return $value;
				return trim($_GET[$index]);
			}
	$hot=getIndex("HOT",0);
	$xemL=getIndex("maL");
	$xemTH=getIndex("maTH");
	$numb=6;
	$page=getIndex("page",0);
?>
<!DOCTYPE html>
<html>
<head>
<title>Free Style A Ecommerce Category Flat Bootstarp Resposive Website Template | Products :: w3layouts</title>
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
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Sản phẩm</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-product--> 
	<?php
			$data2 = $obj->query("select * from giay ");
			$n = $data2->rowCount();
			if($page=="")
			{
				if($xemTH!="")
					$data = $obj->query("select * from giay where ID_NhaSanXuat= '$xemTH' ");
				else if($xemL!="")
					$data = $obj->query("select * from giay where Ma_Loai = '$xemL' ");
				else if($hot==1)
					$data = $obj->query("select * from giay where Hot = 1 ");
				else
					$data = $obj->query("select * from giay ");
			}else {
				$page-=1;
				$limit= ($page*$numb);
				if($xemTH!="")
					$data = $obj->query("select * from giay where ID_NhaSanXuat= '$xemTH' LIMIT $limit,$numb ");
				else if($xemL!="")
					$data = $obj->query("select * from giay where Ma_Loai = '$xemL' LIMIT $limit,$numb ");
				else if($hot==1)
					$data = $obj->query("select * from giay where Hot = 1  LIMIT $limit,$numb ");
				else
					$data = $obj->query("select * from giay LIMIT $limit,$numb");
		}
		$giay = $data ->fetchAll();	
		?>
	<div class="product">
		<div class="container">
			<div class="product-main">
				<div class="col-md-9 p-left">
				<div class="product-one">
				<?php 
				for($i=0;$i<=2;$i++) {
				if(isset($giay[$i])){				?>
				
				<div class="col-md-4 product-left single-left"> 
					<div class="p-one simpleCart_shelfItem">
						<a href="single.php?id=<?php echo $giay[$i]['Ma_Giay']; ?>">
								<img src="images/<?php echo $giay[$i]["img"]; ?>" alt="" />
								<div class="mask mask1">
									<span>Quick View</span>
								</div>
							</a>
						<h4><?php echo $giay[$i]['Ten_Giay'] ?></h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $giay[$i]['Gia'] ?>₫</span></a></p>
					</div>
				</div>
				<?php }
			}
					?>
				<div class="clearfix"> </div>
			</div>
			<div class="product-one">
				<?php if(isset($giay[3])) 
				for($i=3;$i<=5;$i++) {
				if(isset($giay[$i])){					?>
				
				<div class="col-md-4 product-left single-left"> 
					<div class="p-one simpleCart_shelfItem">
						<a href="single.php?id=<?php echo $giay[$i]['Ma_Giay']; ?>">
								<img src="images/<?php echo $giay[$i]["img"]; ?>" alt="" />
								<div class="mask mask1">
									<span>Quick View</span>
								</div>
							</a>
						<h4><?php echo $giay[$i]['Ten_Giay'] ?></h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $giay[$i]['Gia'] ?>₫</span></a></p>
					</div>
				</div>
				<?php }
			}
					?>
							
				<div class="clearfix"> </div>
				<div class="b-btn"  > 
						<?php 	$pa=$page+2;
								$infopage ="";
						if($xemTH!="")
							$infopage = "maTH=".$xemTH;
						else if($xemL!="")
							$infopage = "maL=".$xemL;
						else if($hot==1)
							$infopage = "HOT=1";
						if($page>=1&&$page!=""){ 

						
						?>
								<a href="products.php?page=<?php echo $page; ?>&<?php echo "$infopage"; ?>"><</a>
							<?php }?>
								<a href="products.php?page=1&<?php echo "$infopage" ?>">1</a>
								<a href="products.php?page=2&<?php echo "$infopage" ?>">2</a>
								<a href="products.php?page=3&<?php echo "$infopage" ?>">3</a>
								<a href="products.php?page=<?php echo $pa; ?>&<?php echo "$infopage" ?>">></a>
							</div>
			</div>
			</div>
			<div class="col-md-3 p-right single-right">
				<h3>Danh mục</h3>
					<ul class="product-categories">
						<li><a href="#">Sản phẩm</a> <span class="count">(3)</span></li>
						<li><a href="#">Sản phẩm mới</a> <span class="count">(14)</span></li>
						<li><a href="#">Sản phẩm HOT</a> <span class="count">(2)</span></li>
						<li><a href="#">NAM</a> <span class="count">(2)</span></li>
						<li><a href="#">NỮ</a> <span class="count">(11)</span></li>
						<li><a href="#">SALE</a> <span class="count">(3)</span></li>
					</ul>
					<h3>Sizes</h3>
					<ul class="product-categories">
						<li><a href="#">5.5</a> <span class="count">(14)</span></li>
						<li><a href="#">6</a> <span class="count">(2)</span></li>
						<li><a href="#">6.5</a> <span class="count">(2)</span></li>
						<li><a href="#">7</a> <span class="count">(8)</span></li>
						<li><a href="#">7.5</a> <span class="count">(11)</span></li>
					</ul>
					<h3>GIÁ</h3>
					<ul class="product-categories p1">
						<li><a href="#">800.000VND - 1.000.000VND</a> <span class="count">(14)</span></li>
					</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	<!--end-product-->
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