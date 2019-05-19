<!DOCTYPE>
<?php
session_start();

include("../functions/functions.php");
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
					Welcome Guest!  <b style="color:yellow">Shopping Cart</b> Total Items: <?php total_items(); ?> Total Price: <?php total_price();  ?>  <a href="cart.php" style="color:yellow">Go to Cart</a>


				</span>


			</div>


			
			<div id="products_box" style="background-image: url(../images/background.jpg); height: 900px; width: 800;">
				
				<form action="" method="post" enctype="multipart/form-data">
				
					<table align="center" width="800px" bgcolor="white">

						

						<tr align="center">
							<th>Remove</th>
							<th>Products</th>
							
							<th>Total Price</th>
						</tr>


						<?php
						$total =0;

	global $con;

	$ip=getIP();

	$sel_price="select * from cart where ip_add='$ip' ";

	$run_price = mysqli_query($con, $sel_price);

	while($p_price = mysqli_fetch_array($run_price)){



		$pro_id = $p_price['p_id'];

		$pro_price = "select * from products where product_id='$pro_id' ";

		$run_pro_price = mysqli_query ($con,$pro_price);

		while ($pp_price = mysqli_fetch_array($run_pro_price)){

			

				$product_price=array($pp_price['product_price']);

				$product_title =$pp_price['product_title'];

				$product_image = $pp_price['product_image'];

				$single_price =$pp_price['product_price'];

				
				$values = array_sum($product_price);

				$total +=$values;
			
	
		

	

						?>

						<tr align="center">

							<td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>" /> </td>
							<td><?php echo $product_title; ?><br>
							<img src="../admin_area/product_images/<?php echo $product_image; ?>" width="60" height="60" />	
							</td>

							

								
							<td><br><?php echo "Rs . ".$single_price; ?></td>
							</tr>


								<?php }}?>
							<tr align="right">

								<br>

								<td colspan="4"><b>Sub Total:</td>
								<td ><?php echo "Rs . " .$total; ?> </td>
							</tr> 

							<tr align="center">

								<td colspan="2"><br><input type="submit" name="update_cart" value="Update Cart"/></td>
								<td colspan="1"><br><input type="submit" name="continue" value="Continue Shopping"/></td>
								<td colspan="2"><br><a href="buy.php" style="text-decoration:none; color:black;"><button>Buy</a></button></td>

							</tr>

					</table>

				</form>
				

				<?php

					$ip=getIP();
			
					global $con;



				if(isset($_POST['update_cart'])){



					foreach ($_POST['remove'] as $remove_id) {


				

						$delete_product = "delete from cart where p_id='$remove_id' AND  ip_add='$ip'";

						$run_delete =mysqli_query($con, $delete_product);

						if($run_delete){

							echo"<script>alert('Product removed  !');</script>";

							echo "<script>window.open('cart.php','_self' ) </script>";


						}


				}

			}



				if(isset($_POST['continue'])){

					echo "<script>window.open('all_products(login).php','_self' ) </script>";

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
