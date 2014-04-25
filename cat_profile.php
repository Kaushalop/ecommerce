<html>
<head><link href="style2.css" rel="stylesheet" type="text/css" /></head>
<body>
	<div id="menu">
		<a href="index.php">Home</a><div ></div>
		<a href="cart.php">Cart</a>
		<a href="login.php?action=logout"style="float:right">Logout</a>
		</div>
		<!-- Menu Bar ends-->
		<?php 
		require "init.php";
		$res=mysqli_query($con,"Select * FROM login");
		$row=mysqli_fetch_array($res);
		
		//echo'<img style="margin-right:10px;" src="images/'.$_COOKIE['user_id'].'.jpg" width="30" height="30" align="left">';
								echo ($_COOKIE['fullname']);?>
<?php
//$message="Hello";
		if (isset($_POST["search"]))
	{
		$name=$_POST["cat"];
		$item=$name."_name";
		$res1=mysqli_query($con,"Select * FROM ".$name." where ".$item." like '%".$_POST['term']."%';") or die(mysqli_error($con));
					
		
		}
	else 
	{
		$name=$_GET["cat_name"];
		$res1=mysqli_query($con,"Select * FROM ".$name);
	}
	if(isset($_GET["cat_name"]))
					{
						$name=$_GET["cat_name"];
				
				}
					
					$item_id = 0;
					echo "<h1>".$name."</h1>";
					while($row1=mysqli_fetch_array($res1))
					{
					$item_id++;
					?>
					<div id="item_list"><?php
					echo'<div class="container" >
					
					<?php echo($message);?>
					'.$row1[''.$name.'_name'].'<br>
					'.$row1['price'].'<br>
					<form method="post" action="cat_profile.php?cat_name='.$name.'&product_id='.$row1[''.$name.'_id'].'">
					<input type="submit" name="addtocart" id="'.$row1[''.$name.'_id'].'" value="Add to Cart" />
					
					
					
					</form>
					</div>
					</div>
					';
				}
		
		
		?>
	<div id="search">
	<form name="search" method="post" action="cat_profile.php">
	<input type="text" name="term" placeholder="enter search term" >
	<input type="hidden" name="cat" value="<?php echo $name;?>">
	<input type="submit" name="search" value="Search" >
	</form>
	</div>
	<?php			
				if(isset($_POST['addtocart']))
					{
						 $product=$_GET['product_id'];
						 $itemid=''.$name.'_id';
						 $res=mysqli_query($con,"SELECT * FROM ".$name."
												 WHERE ".$itemid."=".$product."")
								or die(mysqli_error($con));
						 $row=mysqli_fetch_array($res);
						 $itemname=''.$name.'_name';
						 $message=$itemid;
						 $message.="  ";
						 $message.=$itemname;
						 echo($itemid);echo($itemname);echo($product);
						 $res1=mysqli_query($con,"SELECT user_id FROM login where username='".$_COOKIE['username']."'") or die (mysqli_error($con)); 
							$row2=mysqli_fetch_array($res1);
						 $user_id=$row2['user_id'];
						 $query="INSERT INTO cart VALUES (".$user_id.",'".$row[$itemid]."','".$row[$itemname]."','".$row['price']."')";
							mysqli_query($con,$query) or die(mysqli_error($con));
							header("Location:cart.php");
							//$q="SELECT * FROM cart where user_id='".$user_id."' ";
							//while($r=mysqli_fetch_array($q))
							//{
							//echo'<br>'.$r['item_name'].'<br>  '.$r['price'].'';
						 //}
					}
				
		
		


?>


</body>
</html>

