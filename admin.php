<?php
if(isset($_POST['submit']))
	{
		require "init.php";
		$category=$_POST['category'];
		$message=$category;
		$query = "INSERT INTO categories (category_name)
			VALUES (    '$category')  ";
			mysqli_query($con,$query) or die(mysqli_error($con)); 
			$toy_id=$_POST['category'];
			$toy_id.="_id";
			$toy_name=$_POST['category'];
			$toy_name.="_name";
			
		$sql="CREATE TABLE ".$_POST['category']." ( ".$toy_id." INT NOT NULL AUTO_INCREMENT, ".$toy_name." CHAR(30),price INT, PRIMARY KEY ( ".$toy_id." ) )";
			mysqli_query($con,$sql) or die(mysqli_error($con)); 
	}	
	if(isset($_POST['add']))
	{
		require "init.php";
			$toy_name=$_POST['cat_name'];
			$toy_name.="_name";
			$catname=$_POST['cat_name'];
			$item_name=$_POST['item_name'];			
			$price=$_POST['item_price'];
			 
		$query = "INSERT INTO ".$catname."(".$toy_name.",price)
				  VALUES ('".$item_name."','".$price."')";
		
			mysqli_query($con,$query) or die(mysqli_error($con)); 
		
		}
	?>
		<html>
			<link href="style2.css" rel="stylesheet" type="text/css" />

			<form method="post" action="admin.php">
		<input type="text" name="category"placeholder="category">
		<input type="submit" name="submit">
		</form>
		<form method="post">		
		<input type="text" name="cat_name" placeholder="cat u want to fill item to">
		<input type="text" name="item_name" placeholder="ItemName">
		<input type="text" name="item_price" placeholder="Price">
		<input type="submit" name="add" value="Add Item">
		
		
		
		</form>
		
				</html>

