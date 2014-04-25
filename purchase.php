<html>
Welcome to the purchase screen<br>
<link href="style2.css" rel="stylesheet" type="text/css" />
<div id="menu">
		<a href="index.php">Home</a>
		<a href="cart.php">Cart</a>
		
		<a href="login.php?action=logout"style="float:right">Logout</a>
		</div><br>
<input type="text" placeholder="Address" name="ad" style="border-radius:10px;width:270px;"><br>
<form method="post"><input type="submit" name="pay" value="Pay" action="final.php"></form>
<?php
require "init.php"; 
if(isset($_POST['pay']))
{
	 $res1=mysqli_query($con,"SELECT user_id FROM login where username='".$_COOKIE['username']."'") or die (mysqli_error($con)); 
	$row2=mysqli_fetch_array($res1);
	$user_id=$row2['user_id'];
	echo $user_id;
	$query = "delete from cart where user_id = ".$user_id."";
	$res = mysqli_query($con,$query);
	
	header("Location:final.php");
	}
?>
<br>
<br>
<?php 

if(isset($_GET['total']))
{
	$total=$_GET['total'];
	echo 'You are entitled to Pay '.$total.' rupees when Delivered';
	}
?>
</html>
