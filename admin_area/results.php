<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
	<head>
		<title>Online store</title>



		<link rel="stylesheet" type="text/css" href="../styles/style.css" media="all" />
		</head>

<body>
	<!--Main Container starts here-->
	<div class="main_wrapper">


	<!--Header starts here-->
		<div class="header_wrapper">

			<img id="logo" src="../images/logo.png" width="400px" height="100px"/>
			<img id="banner" src="../images/ad.gif" width="600px" height="100px"/>

		</div>
	<!--Header ends here-->
  

	<!--Navigation bar starts-->
	<div class="menubar">
		<ul class="menu" id="menu">
			<li><a href="home.php">Home</a></li>
            <li><a href="all_products(login).php">All products</a></li>
            <li><a href="customer/my_account.php">My account</a></li>
            <li><a href="cart.php">Shopping Cart</a></li>

		</ul>

		<div id="form">
			<form method="get" action="results.php" enctype="multipart/form-data">
				<input type="text" name="user_query" placeholder="Search a Product"/>
				<input type="submit" name="Search" value="Search"/>

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

			<div id="shopping_cart">

				<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
					Welcome Guest!  <b style="color:yellow">Shopping Cart</b> Total Items:Total Price: <a href="cart.php" style="color:yellow">Go to Cart</a>


				</span>


			</div>
			
			<div style="background-image: url(../images/background.jpg); height: 850px; width: 800;" id="products_box" >
				
<?php


	if(isset($_GET['search'])){
		

		$search_query = $_GET['user_query'];

	$get_pro="select * from products where product_keywords like '%$search_query%' ";

	$run_pro=mysqli_query($con,$get_pro);

	while($row_pro=mysqli_fetch_array($run_pro)){

		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_cat2=$row_pro['product_cat2'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		

		echo"
			<div id='single_product'>

				<h3>$pro_title</h3>
				<img src='../admin_area/product_images/$pro_image' width='200' height='175' />

				<p><b> Rs. $pro_price</b></p>

				<a href='details.php?pro_id=$pro_id' style='float:left'>Details</a>
				
				<a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart </button></a>

			</div>";

			
	}
}
?>
			
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
