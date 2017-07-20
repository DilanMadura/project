<?php

	#start the session
	session_start();
	
	#check whether the session is available or not.
if(isset($_SESSION['view'])){
	
	#unset or remove the session.
	unset($_SESSION['view']);
}		

	#Allow user to enter the user.php
	header('location:index.php');

?>