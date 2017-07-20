<?php

	echo '<style>
		td{
			padding:15px;
			font-size:25px;
			color:darkblue;
		}
	
		body{margin: auto;
	padding-left: 0px;
	background: url("images/back2.png") ;
	</style>';

	echo '<img src="images/header_overlay.png" width="100%" style="top:0px;" height="114px"  />';
	echo '<h1 style="color:black; position:absolute;top:8px;left:280px;;">OrderAnythingOnline.com</h1>
		
		<h1 style="margin-left:150px;color:darkgreen">Quick and easy Sign Up!</h1>
		<img src="images/sign.jpg" style="position:absolute;left:800px;">
		<form action="sign_up.php" method="post" style="margin-left:350px;margin-top:50px;">	
		<table>
			<tr>
				<td>User Name : </td><td><input type="text" name="name" style="width:220px;height:30px;border-radius:5px;"></td>
			</tr>
			<tr>
				<td>E-mail : </td><td><input type="email" name="email" style="width:220px;height:30px;border-radius:5px;"></td>
			</tr>
			<tr>
				<td>Password : </td><td><input type="password" style="width:220px;height:30px;border-radius:5px;"></td>
			</tr>
			<tr>
				<td><input type="submit" name="sub" style="width:80px;height:30px;" value="SignUp" "></td>
			</tr>
		</table>
	
    	';
    	
		if(isset($_POST['sub'])){
			include 'config.php';
			$name= $_POST['name'];
			$email= $_POST['email'];
			$pass=$_POST['pass'];
			
			$sql = "insert into sign_up values ('$name','$email','$pass')";
			
			if(mysqli_query($mysqli,$sql)){
				
				header("location:index.php");
			}else{
				echo "awl";
			}
			
			
			//header("location:index.php");
		}
?>