<?php
	session_start();
	include 'config.php';

	$_SESSION['view']= $_POST['names'];
	$email=$_SESSION['view'];
				
	
	$_SESSION['pass']= $_POST['pass'];
	$pass=$_SESSION['pass'];
				
		$sql="select * from sign_up";

		$row=mysqli_query($mysqli,$sql);
		
		while($rows=mysqli_fetch_array($row)){
			echo $rows[0];
			if($rows[0]==$email && $rows[2]==$pass){
				header("location:index.php");
			}
		}

		header("location:index.php");
?>