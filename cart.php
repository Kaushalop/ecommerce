<html>
<head><title> Your Cart</title>
<link href="style2.css" rel="stylesheet" type="text/css" />
</head>
	<body>
		<div id="menu">
		<a href="index.php">Home</a>
		<a href="cart.php">Cart</a>
		
		<a href="login.php?action=logout"style="float:right">Logout</a>
		</div>
		<?php
		require "init.php";
		$res=mysqli_query($con,"Select * FROM login");
		$row=mysqli_fetch_array($res);
		echo($_COOKIE['fullname']);
		?>
		<div class="container">
			Welcome to your Cart Here you can make your cart modifications
		<?php
		//$user_id1=$_COOKIE['username'];
		//echo $user_id1;
		$total=0;
		$res1=mysqli_query($con,"SELECT user_id FROM login where username='".$_COOKIE['username']."'") or die (mysqli_error($con)); 
		$row2=mysqli_fetch_array($res1);
		$user_id=$row2['user_id'];
		$res=mysqli_query($con,"SELECT * FROM cart where user_id=".$user_id) or die (mysqli_error($con)); 
		while($row=mysqli_fetch_array($res))
		{
			$total+=$row['item_price'];
			echo'<form method="post" action="cart.php?product_id='.$row['item_id'].'">
			<div id="itemsincart" style="border:1px solid black;border-radius:7px;width:20%">'.$row['item_id'].'<br>'.$row['item_name'].'<br>'.$row['item_price'].'<br></div>
			<input type="submit" name="remove" value="remove"></form>
			';
			
			}		
			echo'<br>
			<a href="index.php">Continue Shopping</a><br><a href="purchase.php?total='.$total.'">Purchase</a>
			';
			if(isset($_GET['product_id']))
			{
				$itemid=$_GET['product_id'];
				
				$res=mysqli_query($con,"DELETE FROM cart where item_id=".$itemid."") or die(mysqli_error($con));
				header("Lcation:cart.php");
				}
				
		/* if(isset($_GET['item_name'],$_GET['item_id'],$_GET['item_price']))
		 {
				$user_id=$_COOKIE['user_id'];
				$name=$_GET['item_name'];
				$id=$_GET['item_id'];
				$price=$_GET['item_price'];
				$res="SELECT FROM user where user_id = '"  .$user_id.  "'  ";
				$row=mysqli_fetch_array($res);
				$query="INSERT INTO cart (user_id,item_id,item_name,item_price)
				VALUES ('".$user_id."','".$id."','".$name."','".$price."')";
				mysqli_query($con,$query) or die(mysqli_error($con)); 
				$q="SELECT * FROM cart where user_id='".$user_id."' ";
				while($r=mysqli_fetch_array($q))
				{
				echo'<br>'.$r['item_name'].'<br>  '.$r['price'].'';
			 }
			 }*/
			 
			 ?>
</div>
	</body>
</html>
