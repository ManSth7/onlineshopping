<?php

$con=mysqli_connect("localhost","root","","ecommerce");

//getting user ip
function getIP(){
	$ip=$_SERVER['REMOTE_ADDR'];


	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	} elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	
	}
	return $ip;
}



//creating cart
function cart(){

	if (isset($_GET['add_cart'])){
		global $con;

		$ip=getIP();

		$pro_id=$_GET['add_cart'];   

		$check_pro="select * from cart where ip_add='$ip' AND p_id='$pro_id' ";

		$run_check=mysqli_query($con, $check_pro);

		if(mysqli_num_rows($run_check)>0){

			echo " ";
		}

		else{


			$insert_pro="insert into cart (p_id,ip_add)  values('$pro_id','$ip')";
			
			$run_pro=mysqli_query($con, $insert_pro);

			echo "<script> window.open('all_products.php','_self') </script>";

		}

	}
}

//getting the total added item

function total_items(){
	if(isset($_GET['add_cart'])){

		global $con;

		$ip=getIP();

		$get_items="select * from cart where ip_add='$ip' ";

		$run_items=mysqli_query($con,$get_items);

		$count_items=mysqli_num_rows($run_items);


}

	else{

		global $con;

		$ip=getIP();

		$get_items="select * from cart where ip_add='$ip' ";

		$run_items=mysqli_query($con,$get_items);

		$count_items=mysqli_num_rows($run_items);

	}

	echo $count_items;
}


//getting total price

function total_price(){

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

				$values = array_sum($product_price);

				$total +=$values;


			}
		}
	
		echo "Rs." . $total;

	}




//Getting the catagories

function getCats(){

	global $con;
	$get_cats="select * from catagories";
	$run_cats=mysqli_query($con, $get_cats);

	while($row_cats=mysqli_fetch_array($run_cats)){

		$cat_id= $row_cats['cat_id'];
		$cat_title=$row_cats['cat_title'];



		echo "<li><a href='all_products.php?cat=$cat_id'>$cat_title</a></li>";

	}
}

//Getting the catagories2

function getCats2(){

	global $con;
	$get_cats2="select * from catagories2";
	$run_cats2=mysqli_query($con, $get_cats2);

	while($row_cats2=mysqli_fetch_array($run_cats2)){

		$cat2_id= $row_cats2['cat2_id'];
		$cat2_title=$row_cats2['cat2_title'];



		echo "<li><a href='all_products.php?cat2=$cat2_id'>$cat2_title</a></li>";

	}
}


function getPro(){

	if(!isset($_GET['cat'])){
		if(!isset($_GET['cat2'])){





	global $con;

	$get_pro="select * from products order by RAND() LIMIT 0,9";

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
				<img src='admin_area/product_images/$pro_image' width='200' height='175' />

				<p><b> Rs. $pro_price</b></p>

				<a href='details.php?pro_id=$pro_id' style='float:left'>Details</a>
				
				<a href='all_products.php?add_cart=$pro_id'><button style='float:right'>Add to Cart </button></a>

			</div>";
	}
	
	}

}

}



function getCatPro(){

	if(isset($_GET['cat'])){
		
		$cat_id=$_GET['cat'];


	global $con;

	$get_cat_pro="select * from products where product_cat='$cat_id'";

	$run_cat_pro=mysqli_query($con,$get_cat_pro);

	$count_cats=mysqli_num_rows($run_cat_pro);

	if($count_cats==0){

			echo"<h2>There is no product in this category!!</h2>";
		}

	while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){

		$pro_id=$row_cat_pro['product_id'];
		$pro_cat=$row_cat_pro['product_cat'];
		$pro_cat2=$row_cat_pro['product_cat2'];
		$pro_title=$row_cat_pro['product_title'];
		$pro_price=$row_cat_pro['product_price'];
		$pro_image=$row_cat_pro['product_image'];

		
		
		

		echo"
			<div id='single_product'>

				<h3>$pro_title</h3>
				<img src='admin_area/product_images/$pro_image' width='200' height='175' />

				<p><b> Rs. $pro_price</b></p>

				<a href='details.php?pro_id=$pro_id' style='float:left'>Details</a>
				
				<a href='all_products.php?add_cart=$pro_id'><button style='float:right'>Add to Cart </button></a>

			</div>";
	}
	
	}



}



function getCat2Pro(){

	if(isset($_GET['cat2'])){
		
		$cat2_id=$_GET['cat2'];


	global $con;

	$get_cat2_pro="select * from products where product_cat2='$cat2_id'";

	$run_cat2_pro=mysqli_query($con,$get_cat2_pro);

	$count_cats2=mysqli_num_rows($run_cat2_pro);

	if($count_cats2==0){

			echo"<h2>There is no product in this category!!</h2>";
		}

	while($row_cat2_pro=mysqli_fetch_array($run_cat2_pro)){

		$pro_id=$row_cat2_pro['product_id'];
		$pro_cat=$row_cat2_pro['product_cat'];
		$pro_cat2=$row_cat2_pro['product_cat2'];
		$pro_title=$row_cat2_pro['product_title'];
		$pro_price=$row_cat2_pro['product_price'];
		$pro_image=$row_cat2_pro['product_image'];

		
		
		

		echo"
			<div id='single_product'>

				<h3>$pro_title</h3>
				<img src='admin_area/product_images/$pro_image' width='200' height='175' />

				<p><b> Rs. $pro_price</b></p>

				<a href='details.php?pro_id=$pro_id' style='float:left'>Details</a>
				
				<a href='all_products.php?add_cart=$pro_id'><button style='float:right'>Add to Cart </button></a>

			</div>";
	}
	
	}

}




?>