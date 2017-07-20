<?php
	session_start();
	echo $_SESSION['uts'];
	$_SESSION['unknown']=$_SESSION['uts'];
	$_SESSION['unknown1']=$_SESSION['uts1'];
	header("location:more.php");
?>