<html>
	<head>
		<title>Welcome to e-shopping</title>
		<link href="style2.css" rel="stylesheet" type="text/css" />
	</head>
	<!--body starts-->
	<body>
		<div id="menu">
		<a href="index.php">Home</a>
		<a href="cart.php">Cart</a>
		
		<a href="login.php?action=logout"style="float:right;paddiong:0px">Logout</a>
		</div>
		<!-- Menu Bar ends-->
		<?php 
		require "init.php";
		//if(if(isset($_GET['action'])) //logout
	//{)
		//$res=mysqli_query($con,"Select * FROM login where user_id='".$_COOKIE['user_id']."'");
		//$row=mysqli_fetch_array($res);
		
		//echo'<img style="margin-right:10px;" src="images/'.$row['user_id'].'.jpg" width="30" height="30" align="left">';
								echo ($_COOKIE['fullname']);?>
								<br>
							
	
		<div id="sidebar"style="float:left">
		<div class="container" style="width:200px;">
			<?php
		
		$res=mysqli_query($con,"Select * FROM try.categories");
		
		while($row=mysqli_fetch_array($res))
		{
			echo'<a class= "sidemenu" href="cat_profile.php?cat_name='.$row['category_name'].'">'.$row['category_name'].'</a><br>
			
			';}
			?></div>
			</div>
		
		<div id="main"style="float:left;margin-left:3px">
		<div class="container" style="float:left;width:800px;">
		<h1>Categories</h1>
		<?php
		
		$res=mysqli_query($con,"Select * FROM try.categories");
		
		
		while($row=mysqli_fetch_array($res) )
		{
			$res1=mysqli_query($con,"SELECT * FROM ".$row['category_name']."") or die(mysqli_error($con));
			 $row1=mysqli_fetch_array($res1);
		echo'<h3>'.$row['category_name'].'</h3>
		<div class="images">
		'.$row1[''.$row['category_name'].'_name'].'<br>'.$row1['price'].'<br>
		<a href="cat_profile.php?cat_name='.$row['category_name'].'">See All</a>
		</div>';
	}
		

?>

		
		</div>
			</div>
		<div class="clear"style="clear:both"></div>





	</body>	
</html>
