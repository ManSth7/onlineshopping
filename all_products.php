<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
	<head>
		<title>Online store</title>



		<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
		</head>

<body>
	<!--Main Container starts here-->
	<div class="main_wrapper">


	<!--Header starts here-->
		<div class="header_wrapper">

			<img id="logo" src="images/logo.png" width="400px" height="100px"/>
			<img id="banner" src="images/ad.gif" width="600px" height="100px"/>

		</div>
	<!--Header ends here-->
  

	<!--Navigation bar starts-->
	<div class="menubar">
		<ul class="menu" id="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="all_products.php">All products</a></li>
			<li><a href="#">Contact us</a></li>

		</ul>

		<div id="form">
			<form method="get" action="results.php" enctype="multipart/form-data">
				<input type="text" name="user_query" placeholder="Search a Product"/>
				<input type="submit" name="search" value="Search"/>
			</form>

		</div>
	</div>

	<!--Navigation bar ends-->



	<!--content wrapper starts-->
	<div class="content_wrapper" >


		<div  id="sidebar">

			<div id="sidebar_title">Flameless Cooking Range</div><br>
			<ul  id="cats" >

				<?php getCats(); ?>


				
			<ul>

				<br><br><br>
			<div id="sidebar_title">Life Style Living Range</div><br>

			<ul id="cats">

				<?php getCats2(); ?>

				
			<ul>


	</div>

		<div id="content_area">

			<?php cart(); ?>

			<div id="shopping_cart">

				<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
					Welcome Guest!  <b style="color:yellow">Shopping Cart</b> Total Items: <?php total_items(); ?> Total Price: <?php total_price();  ?>  <a href="admin_area/login/login.php" style="color:yellow">Go to Cart</a>


				</span>


			</div>


			
			<div id="products_box" style="background-image: url(images/background.jpg); height: 900px; width: 800;">
				
				
				
				<?php getPro(); ?>
				<?php getCatPro(); ?>
				<?php getCat2Pro(); ?>
				

			</div>
		</div>

	

	<!--Content wrapper ends-->



		<div id="footer">
			<h2 style="text-align:center; padding-top:10px">&copy; 2016 by www.eshop.com</h2>
		</div>









	</div>

	<!--Main Container ends here-->

</body>
</html>
