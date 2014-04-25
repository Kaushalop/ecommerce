<?php
require "init.php";
if(isset ($_POST['submit']))
{
	extract($_POST);
	
	$query = "INSERT INTO user (username,fullname)
			VALUES (    '$username'	, '$fullname')  ";
			mysqli_query($con,$query) or die(mysqli_error($con)); 
		
		//$user_id = mysqli_insert_id($con);
				$query = "Insert into login (username, password,fullname) 
				values ('$username', '$password','$fullname')";
				mysqli_query($con,$query) or die(mysqli_error($con));
				//move_uploaded_file($_FILES['pic']['tmp_name'],"images/'.$user_id.'.jpg");
				
				$query = "select max(user_id) from login";
				$res=mysqli_query($con,$query);
				$row=mysqli_fetch_assoc($res);
				$user_id = $row['user_id'];
				// AFTER REGISTRATION...! Log Him into main page
				setcookie("user_id", $user_id, time() + 7*24*60*60); //semicolon
				setcookie("username", $username, time() + 7*24*60*60);
				setcookie("fullname", $fullname, time() + 7*24*60*60); //semicolon
				header("Location: index.php"); // REDIRECT 
	}
?>

<html>
<head>
		<title>Login</title>
		<link href="style2.css" rel="stylesheet" type="text/css" />

	</head>
	<body>
	
	<div class="container" >
		
		<form method="post" enctype="multipart/form-data">
			<input type="text" name="username" placeholder="username"><br>
			<input type="password" name="password" placeholder="password"><br>
			<input type="text" name="fullname" placeholder="Full Name"><br>
			<input type="submit" name="submit"><br>
		</form>
	</div>
	</body>


</html>

