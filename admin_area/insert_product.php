<!DOCTYPE>
<?php

include("includes/db.php");

?>


<html>
	<head>
		<title>Inserting Products</title>

		  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

	</head>




<body bgcolor="skyblue">


<form action="insert_product.php" method="post" enctype="multipart/form-data">
	<table align="center" width="700" border="2" bgcolor="orange">

		<tr align="center"> 
			<td colspan="7"><h2>Insert New Post Here</td>

		</tr>

		<tr>
			<td align="right">Product Title:</td>
			<td><input type="text" name="product_title" size="60" /></td>

		</tr>

		<tr>
			<td align="right">Product Catagory1:</td>
			<td>
				<select name="product_cat">
					<option>Select a Catagory</option>
					 
					<?php
					$get_cats="select * from catagories";
	$run_cats=mysqli_query($con, $get_cats);

	while($row_cats=mysqli_fetch_array($run_cats)){

		$cat_id= $row_cats['cat_id'];
		$cat_title=$row_cats['cat_title'];



		echo "<option value='$cat_id'>$cat_title</option>";

	}
?>
</select>

	</td>

		</tr>



		<tr>
			<td align="right">Product Catagory2:</td>
			<td>
				<select name="product_cat2">
					<option>Select a Catagory</option>
					 
					<?php
					$get_cats2="select * from catagories2";
	$run_cats2=mysqli_query($con, $get_cats2);

	while($row_cats2=mysqli_fetch_array($run_cats2)){

		$cat2_id= $row_cats2['cat2_id'];
		$cat2_title=$row_cats2['cat2_title'];



		echo "<option value='$cat2_id'>$cat2_title</option>";

	}
?>
</select>


	</td>
			

		</tr>



		<tr>
			<td align="right">Product image:</td>
			<td><input type="file" name="product_image" /></td>

		</tr>



		<tr>
			<td align="right">Product price:</td>
			<td><input type="text" name="product_price" /></td>

		</tr>


		<tr>
			<td align="right">Product desc:</td>
			<td><textarea name="product_desc" cols="20" rows="10" /></textarea></td>

		</tr>


		<tr>
			<td align="right">Product keywords:</td>
			<td><input type="text" name="product_keywords" size="60" /></td>

		</tr>



		<tr align="center">
			<td colspan="7"><input type="submit" name="insert_post" value="Insert Product"/></td>

			</tr>

		</table>

		</form>


</body>
</html>

<?php
	if(isset($_POST['insert_post'])){

		
		
		$product_cat=$_POST['product_cat'];
		$product_cat2=$_POST['product_cat2'];
		$product_title=$_POST['product_title'];
		$product_price=$_POST['product_price'];
		$product_desc=$_POST['product_desc'];
		$product_keywords=$_POST['product_keywords'];


		//getting image
		$product_image=$_FILES['product_image']['name'];
		$product_image_tmp=$_FILES['product_image'] ['tmp_name'];

		move_uploaded_file($product_image_tmp,"product_images/$product_image");

		$insert_product="insert into products (product_cat,product_cat2,product_title,product_price,product_desc,product_image,product_keywords) 
		values('$product_cat','$product_cat2','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";

		$insert_pro=mysqli_query($con,$insert_product);

		if($insert_pro){
			echo "<script>alert('Product has been inserted')</script>";
			echo"<script>window.open('insert_product.php','_self')</script>";
		}
	}


?>