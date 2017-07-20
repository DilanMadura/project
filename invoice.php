<?php
	
	
	$_POST['radio'];
	$_POST['dates'];
	$_POST['csc'];

?>

<div class="view-cart">
 	<?php
   	session_start();
	include 'config.php';
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="paypal-express-checkout/process.php">';
		echo '<ul>';
		$cart_items = 0;
		
		
		foreach ($_SESSION["products"] as $cart_itm)
        {
        	$iss=uniqid();
			$_SESSION['last']=$iss;
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT product_name,product_desc, price FROM services WHERE product_code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		   
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			
			$name=$obj->product_name;
			$quna=$cart_itm["qty"];
			$code=$product_code;
			
			
			$sql="insert into item values ('$iss','Asbar','$name','$quna','$subtotal','$code')";
			
			if(mysqli_query($mysqli,$sql)){
			//	echo "success";
			}else{
			//	mysqli_error($mysqli);
			}
			
			$cart_items ++;
			
        }
    	
		
    }else{
		echo 'Your Cart is empty';
	}

	?>
	
<?php

	header("location:pdf.php")
?>