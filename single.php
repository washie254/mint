<?php include('connect-db.php'); 
 if (isset($_GET['id'])){
	$gid = $_GET['id'];
	$pid =$gid - 1017823;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Mintari | Kenya</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //tags -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->

<!-- //header-bot -->
<!-- banner -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav menu__list">
					<li class="menu__item "><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="about.php">About</a></li>
					<li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
					</ul>
				</div>
				</div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
	
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign In">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
								<li><a href="#" class="facebook">
										<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="twitter"> 
										<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="instagram">
										<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="pinterest">
										<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
							</ul>
							<div class="clearfix"></div>
							<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
								<li><a href="#" class="facebook">
										<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="twitter"> 
										<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="instagram">
										<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
								<li><a href="#" class="pinterest">
										<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
							</ul>
							<div class="clearfix"></div>
							<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->


  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<ul class="slides">
					<?php 
						$sql9 = "SELECT * from products_images WHERE product_id='$pid'";
						$res= mysqli_query($con,$sql9);

						if (mysqli_num_rows($res) > 0) { 
							while ($rows = mysqli_fetch_array($res)){
								$img = $rows['filename'];
								echo '
								<li data-thumb="../admin/'.$img.'">
									<div class="thumb-image"> <img src="../admin/'.$img.'" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								';

							}
						}

						?>
						<!-- <li data-thumb="images/d2.jpg">
							<div class="thumb-image"> <img src="images/d2.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/d1.jpg">
							<div class="thumb-image"> <img src="images/d1.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
						<li data-thumb="images/d3.jpg">
							<div class="thumb-image"> <img src="images/d3.jpg" data-imagezoom="true" class="img-responsive"> </div>
						</li> -->
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
		<?php 
			$sql = "SELECT * from products WHERE id='$pid' LIMIT 1";
			$res= mysqli_query($con,$sql);
			 
			while($row = mysqli_fetch_array($res, MYSQLI_NUM))
			{
				$pname = $row[1];
				$pprice =$row[2];
				$pavailability = $row[3];
				$pfeatures = $row[4];
				$pdescription = $row[5];
				$padditionalinfomation = $row[6];
				$pcategory = $row[7];
				$pdesigner = $row[8];
				$pmaterial = $row[9];

				$priorprice = $pprice + ($pprice)/2.4;
				$prior = number_format($priorprice, 2);

			}
		?>
		<style>
		</style>    <?php
						$url =  "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

						$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
						$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';
						$compurl= $protocol.$escaped_url;
						// echo $compurl;
						//  $escaped_url; link to the speciific product
					?>
					<?php $ran2 = rand(4,5);?>
					<h3 style=""><?=$pname?></h3><hr style ="color: black; heigth:10%;">
					<p style=""><b>DESIGNED BY:</b> <span style="color: rgb(3, 252, 223);"><b><?=$pdesigner?></b> <?php if($ran2 == 5){ echo '<img src="assets/gen/badge.jpg" style="width:30px; height:30px;">';}?></span></p>
					<p><span class="item_price"><b>Ksh. <?=number_format($pprice, 2);?> </b></span>  <del>Kshs. <?=$prior?></del></p>
					<div class="rating1">
						<?php 
							$x = 1;
							while($x <= $ran2 ) {
									echo '<img src="assets/gen/star2.png" style="width:20px; height:20px;">&nbsp;&nbsp;';
								$x++;
							} 
						?>
					</div>
					

					<div class="description">
						<b>Desciption :</b>
						<h5><?=$pdescription?></h5>
						<p>
							<br><b>Features:</b>
							<h5><?=$pfeatures?></h5>
							<b>Material:</b> <h5><?=$pmaterial?></h5>
							<br><b>Designer : </b><?=$pdesigner?>
						</p>
					</div>
					<div class="occasional">
						<hr>
						<h5><b>Color :</b></h5><br>
						Select Your Favorite Color : <input type="color" name="favcolor" value="#ff0000"><br><br>
  						<input type="submit">
						<hr>
						
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="<?=$pname?>">
									<input type="hidden" name="amount" value="<?=$pprice?>">
									<input type="hidden" name="discount_amount" value="0">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>
																			
					</div>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
						<li class="share">Share On : </li>
						<li><a href="http://www.facebook.com/sharer.php?u=<?=$compurl?>" target="_blank"class="facebook">
								<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
						<li><a  href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?=$compurl?>" target="_blank" class="twitter"> 
								<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
						<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?=$compurl?>" target="_blank" class="pinterest">
								<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
					</ul>		
		      </div>
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals --> 
	<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Description</li>
							<li>Reviews</li>
							<li>Information</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">

							<div class="single_page_agile_its_w3ls">
							  <h6>PRODUCT: <?=$pname?></h6>
							   <p><?=$pdescription?></p>
							   <p class="w3ls_para">FEATURES: <br> <?=$pfeatures?>.</p>
							</div>
						</div>
						<!--//tab_one-->
						<div class="tab2">
							
							<div class="single_page_agile_its_w3ls">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="assets/gen/user0.png" alt=" " class="img-responsive">
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Admin</a></li>
												<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
											</ul>
											<p> 
												<?php $ran = rand(4,5);?>
												<?=$pname?>  is a great product by <?=$pdesigner?>. has amazing features including but not limited to : <?=$pfeatures?>
											 	<br>would totally give the product a <?=$ran?> - star rating. Great job <?=$pdesigner?> <br>

												 <?php 
												 	$x = 1;
												  	while($x <= $ran ) {
														 echo '<img src="assets/gen/star.png" style="width:20px; height:20px;">&nbsp;&nbsp;';
														$x++;
													} 
												 ?>
											 </p>

										</div>
										<div class="clearfix"> </div>
						             </div>
									 <div class="add-review">
										<h4>add a review</h4>
										<form action="#" method="post">
												<input type="text" name="Name" required="Name">
												<input type="email" name="Email" required="Email"> 
												<textarea name="Message" required=""></textarea>
											<input type="submit" value="SEND">
										</form>
									</div>
								 </div>
								 
							 </div>
						 </div>
						   <div class="tab3">

							<div class="single_page_agile_its_w3ls">
							  <h6><?=$pname?></h6>
							   <p>	<b>Category : </b><?=$pcategory?>.<br>
							   		<b>Price: </b> Kshs. <?=number_format($pprice, 2)?><br> 
									<b>Description:</b><br>
									<?=$pdescription?><br>
									<b>Features: </b><br>
									<?=$pfeatures?>
									<br>
									<b>Designer: </b><?=$pdesigner?>

							   </p>
							   <p class="w3ls_para"></p>
							</div>
						</div>
					</div>
				</div>	
			</div>
	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->
	
			<div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">Similar <span>Products</span></h3>	
			 <?php 	
			 		$sql2 = "SELECT * FROM products WHERE pcategory='$pcategory' AND id!='$pid'  LIMIT 4";
					$results2 = mysqli_query($con, $sql2);

					while($row = mysqli_fetch_array($results2, MYSQLI_NUM))
					{ 
						$pid = $row[0];
						$pprice = $row[2];
						$price= number_format($row[2], 2);

						$sql9 = "SELECT * from products_images WHERE product_id='$pid' LIMIT 1";
						$res= mysqli_query($con,$sql9);
						if (mysqli_num_rows($res) > 0) { 
							while ($rows = mysqli_fetch_array($res)){
								$img2 = $rows['filename'];
							}
						}

						$ur = $pid+1017823;
						$priorprice = $pprice + ($pprice)/2.4;
						$prior = number_format($priorprice, 2);
					 echo  ' <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="../admin/'.$img2.'" alt="" class="pro-image-front">
										<img src="../admin/'.$img2.'"alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.php?id='.$ur.'" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.php?id='.$ur.'">'.$row[1].'</a></h4>
										<div class="info-product-price">
											<span class="item_price"> Ksh'.$price.'</span>
											<del>'.$prior.'</del>
										</div>';
										?>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="business" value=" ">
													<input type="hidden" name="item_name" value="<?=$row[1]?>">
													<input type="hidden" name="amount" value="<?=$pprice?>">
													<input type="hidden" name="discount_amount" value="0">
													<input type="hidden" name="currency_code" value="USD">
													<input type="hidden" name="return" value=" ">
													<input type="hidden" name="cancel_return" value=" ">
													<input type="submit" name="submit" value="Add to cart" class="button">
												</fieldset>
											</form>
										</div>
																			
									</div>
								</div>
							</div>
							<?php
						}
						?>
							<div class="clearfix"> </div>
					<!--//slider_owl-->
		         </div>
	        </div>
 </div>
<!--//single_page-->
<!--/grids-->
<div class="coupons" style="background-color:#003963; color: white;">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
					<div class="col-md-3 col-xs-6">
						<div class="center bounce-in">
							<span class="stat-icon"><img src="assets/icons/icon.png" style="width: 30px; height:30px;"></span>
							<br><br>
							<h1><span class="counter">3587</span></h1>
							<h3 style="font-size: 20px;">REACH</h3>
							___
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="center bounce-in">
							<span class="stat-icon"><img src="assets/icons/icon2.png" style="width: 30px; height:30px;"></span>
							<br><br>
							<h1><span class="counter">207</span></h1>
							<h3 style="font-size: 20px;">PAGE VISITS TODAY</h3>
							___
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="center bounce-in">
							<span class="stat-icon"><img src="assets/icons/icon3.png" style="width: 30px; height:30px;"></span>
							<br><br>
							<h1><span class="counter">873</span></h1>
							<h3 style="font-size: 20px;">PARTNERS</h3>
							___
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="center bounce-in">
							<span class="stat-icon"><img src="assets/icons/icon4.png" style="width: 30px; height:30px;"></span>
							<br><br>
							<h1><span class="counter">900</span></h1>
							<h3 style="font-size: 20px;">SATISFIED CLIENTS</h3>
							___
						</div>
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--grids-->
<div style="background-color: black; height:6px;"></div>
<div class="coupons" style="background-color: black;">
	<div class="coupons-grids text-center">
			<p style="color: white; font-family:'Montserrat'; letter-spacing:0.5em; font-size: 22px;"><b>OUR PARTNERS AND SPONSERS</b></p><br><br>
		<div class="w3layouts_mail_grid">
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="center bounce-in">
					<img src="assets/partners/logo-01.png" style="width:150px; height: 100px;">
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="center bounce-in">
					<img src="assets/partners/logo-02.png">
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="center bounce-in">
					<img src="assets/partners/logo-03.png">
				</div>
			</div>
			<div>
				<div class="center bounce-in">
					<img src="assets/partners/logo-04.png">
				</div>
			</div>
		</div>
	</div>
</div>
<!--grids-->
<!-- footer -->
<div class="footer">
		<div class="footer_agile_inner_info_w3l">
			<div class="col-md-3 footer-left">
				<h2><a href="index.html"><span>M</span>intari Kenya </a></h2>
				<p>We are a state of the art Kenyan 
					company that encompasses various Kenyan 
					Products from enterpreneurs and freelance designers 
					who create original content from the local market
				</p>
				<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
					<li><a href="https://www.facebook.com/mintarikenya/" target="0" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
					<li><a href="https://twitter.com/mintarikenya/" target="0" class="twitter"> 
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
					<li><a href="https://www.instagram.com/mintarikenya/"  target="0"  class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
					<!-- <li><a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li> -->
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Our <span>OPENING TIME</span> </h4>
						<ul>
							<li>Monday - Friday: 9AM - 5PM</a></li><hr>
							<li>Saturday: 10AM - 12PM</a></li><hr>
							<li>Sundays: Closed</a></li><hr>
							<li>We do <b>NOT</b> Work on <b>Holidays</b></a></li>
						</ul>
					</div>
					
					<div class="col-md-5 sign-gd-two">
						<h4>Store <span>Information</span></h4>
						<div class="w3-address">
							<div class="w3-address-grid">
								<div class="w3-address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="w3-address-right">
									<h6>Phone Number</h6>
									<p>+254 716 038007</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="w3-address-grid">
								<div class="w3-address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="w3-address-right">
									<h6>Email Address</h6>
									<p>Email :<a href="mailto:mintarikenya@gmail.com"> mintarikenya@gmail.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="w3-address-grid">
								<div class="w3-address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="w3-address-right">
									<h6>Location</h6>
									<p>Nairobi, Kenya 
									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="col-md-3 sign-gd flickr-post">
						<h4>C<span>ontents</span></h4>
						<ul>
							<li><a href="index.php">Home</a></li><br>
							<li><a href="about.php">About</a></li><br>
							<li><a href="contact.php">Contact</a></li>
							
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div  style="background-color:rgba(78, 77, 77, 0.26); height:60px;">
			<p class="copy-right">&copy 2019. All rights reserved | Design by <a href="#">Mintari | Kenya</a></p>
		</div>
		</div>
	</div>
	
	<!-- //footer -->

<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
	<!-- single -->
<script src="js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
<!-- //script for responsive tabs -->		
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
