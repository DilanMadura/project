<?php
	#create a connection,
	$con=mysqli_connect("localhost","root","","book_shop");
	
	
	#check the connection
	if(mysqli_connect_errno()){
		echo "Fail in : ".mysqli_connect_error();
		echo "fails";
	}else{
		
		
	}
?>