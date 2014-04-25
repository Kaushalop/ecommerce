<?php
$message="Enter Your Login Details";
require "init.php";
if(isset($_POST['submit']))
{
	
	$username=$_POST['username'];
	$res = mysqli_query($con,"Select * from login
		where username = '"  .$username.  "'  ") or die( mysqli_error($con) ) ; 
	
	if ( mysqli_num_rows($res) == 0) // no rows
		{
			$message =  "Denied";
		}
		else  // at least one row
		{
			//access the result row
			$row = mysqli_fetch_array( $res );
			
			if( $row['password'] ==  $_POST['password'])
			{
				setcookie("user_id", $row['user_id'] , time() + 7*24*60*60); //semicolon
				setcookie("username", $row['username'], time() + 7*24*60*60); 
				setcookie("fullname", $row['fullname'], time() + 7*24*60*60);//semicolon
				header("Location: index.php"); // REDIRECT 
			}
			else
				$message = "Denied";
		
		}
	}
	if(isset($_GET['action'])) //logout
	{
		setcookie('user_id',0 , time() -100); //semicolon
		setcookie('username',0, time() - 100); //semicolon
		setcookie('fullname',0, time() - 100); //semicolon
	}
	

?>

<html>
	<head>
		<title>Manipal e-Stores Login</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<div class="heading"><h1>Manipal e-Stores</h1></div>
	<div class="container">
		<?php echo($message); ?><br>
		<form method="post" action="login.php">
			<input type="text" name="username" placeholder="username" autocomplete="off"><br>
			<input type="password" name="password" placeholder="password"><br>
			<!--<a href="submit?user_id='.$row['user_id'].'"name="submit"><br>-->
			<input type="submit" name="submit"><br>
			<a href="register.php" style="text-decoration:none;color:white">Register</a>
		</form>
	</div>
	</body>
</html>
