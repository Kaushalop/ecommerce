<?php
	
	
	$con = mysqli_connect("localhost",  "root" ,  "", "eventreg" ) or
	die(   mysqli_error( $con )  );
	function singlequery($query)
	{
		global $con;
		$res = mysqli_query($con,$query) or die(mysqli_error($con));
		$row=mysqli_fetch_array($res);
		echo $row[0];
	}
?>
