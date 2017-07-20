<?php
session_start();
include_once("config.php");
?>
	
 					


<!DOCTYPE html>
<html>
<head>
	<style>
	
	#header_container { background:#eee; border:1px solid #666; height:60px; left:0; position:fixed; width:100%; top:0; }
#header{ line-height:60px; margin:0 auto; width:940px; text-align:center; }
 
 
	
	
	.button { width: 150px; padding: 10px; background-color: #FF8C00; box-shadow: -8px 8px 10px 3px rgba(0,0,0,0.2); font-weight:bold; text-decoration:none; }
		   #cover{ position:fixed; top:0; left:0; background:rgba(0,0,0,0.6); z-index:5; width:100%; height:100%; display:none; }
		    #loginScreen { height:380px; width:340px; margin:0 auto;
		     position:absolute;
			 top:150px;
			  z-index:10; display:none; background: url(login.png) no-repeat;
			   border:5px solid #cccccc; border-radius:10px; }
			    #loginScreen1 { height:380px; width:340px; margin:0 auto;
		     position:absolute;
			 top:150px;
			  z-index:10; display:none; background: url(login.png) no-repeat;
			   border:5px solid #cccccc; border-radius:10px; }
		     #loginScreen:target, #loginScreen:target + #cover{ display:block; opacity:2; } .cancel { display:block; position:absolute; top:3px; right:2px; background:rgb(245,245,245); color:black; height:30px; width:35px; font-size:30px; text-decoration:none; text-align:center; font-weight:bold;
		      }
	body{margin: auto;
	padding-left: 0px;
	background: url("images/back2.png") ;
}
	
	</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order Anything</title>
<link href="style/help.css" rel="stylesheet" type="text/css">
</head>


<body>
	
	
	
	
	
	<img src="images/header_overlay.png" width="1335px" height="114px"  />
	<ul class="nav">
    		<li ><a href="index.php" style="background-color:gray;">Home</a></li>
    		<li><a href="food.php">Foods</a></li><li><a href="grocery.php">groceries</a></li><li><a href="electric.php">Electronic Items</a></li>
    		<li><a href="cloth.php">Clothes</a></li>
    	</ul>
    	<img src="images/logo.jpg" style="position:absolute;width:200px;height:50px;margin-top:-125px;margin-left:15px;" />
    	<h1 style="position:absolute;top:178px;left:540px;color:#0A3375;">Order Anything</h1>
    	<h1 style="color:black; position:absolute;top:8px;left:280px;;">OrderAnythingOnline.com</h1>
    	
		
		
    	<div style="position:absolute;top:320px;left:740px;color:whitesmoke">
    	Whether youre looking for electronics, books,<br>laptops, toys, home improvement 
    	gear,<br> home furnishings, gifts, clothing, cell phones, <br>computers,<br> PDAs or virtually anything else, you can find
    	 it online at<br> one of the stores or sources listed here at Order Anything Online
    	</div>
		
    	<img src="images/order_online.jpg" style="margin-left: 220px;margin-top: 20px;border-radius: 5px;" width="950px" />
	<br /><br /><br />
	



<div style="background-color: gray;width: 290px;height:980px;margin-left: 218px;border-top-left-radius: 18px;border-bottom-left-radius: 18px;">
		<h2 style="color: whitesmoke;padding: 5px"> Online Ordering Food</h2>
		
<img src="images/kolla.jpg" width="150px" style="float: left;margin-left: 5px;padding: 5px" />
	<p style="color: lightblue">
		No need to pick up the phone.
		Quick and accurate
		ordering is here!</p>
<br><br />

<h2 style="color: whitesmoke;padding: 5px"> Online ordering </h2>		
<img src="images/electric.gif" width="150px" style="float: left;margin-left: 5px;padding: 5px" />
	<p style="color: lightblue">
	Electrical products online, switchgear, lighting,
 	outdoor electrical supplies and more. 
 	
 	<br /><br /><br />
 	<h2 style="color: whitesmoke;padding: 5px"> Online ordering groceries</h2>		
 	<img src="images/girl.jpg" width="150px" height="190px" style="float: left;margin-left: 5px;padding: 5px" />
	<p style="color: lightblue"><br /><br />
	Competitive prices, double coupon 
	savings, and exclusive offers
	
	
<br /><br /><br /><br /><br /><br />
	<h2 style="color: whitesmoke;padding: 5px"> Online ordering Clothes</h2>		
 	<img src="images/hos.jpg" width="150px" height="190px" style="float: left;margin-left: 5px;padding: 5px" />
	<p style="color: lightblue"><br /><br />
	Discover the latest in womens fashion and mens clothing online
	
	
	</div>
	</div>


	
<div id="products-wrapper">
   
    <div class="products" style="position: absolute;left: 550px;width: 520px;top:550px;">
    	
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM services");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="product">'; 
            echo '<form method="post" action="cart_update.php">';
			echo '<div class="product-thumb"><a href="#"><img class="imgs" style="width:100px;height:100px" src="images/'.$obj->product_img_name.'"></a></div>';
            echo '<div class="product-content"><h3>'.$obj->product_name.'</h3>';
            echo '<div class="product-desc">'.$obj->description.'</div>';
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }
    
    }
    ?>
    </div>
    
<div class="shopping-cart" style="position: absolute;left: 20px;width: 350px;top:170px">
<h2>Your Shopping Cart</h2>
<?php
if(isset($_SESSION["products"]))
{
	//header("location:config.php");
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<font style="font-size:18px"><span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo $cart_itm["name"].'</font>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Quantity : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :<b style="font-size:15px;color:darkgreen">'.$currency.$cart_itm["price"].'</b></div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol><b>';
    echo '<span class="check-out-txt"><strong>Total : <b style="color:darkgreen;font-size:20px">'.$currency.$total.'</b><br><br></strong> <a href="view_cart.php" style="background-color:yellow;padding:5px;"><b>Proceed To CheckOut</b></a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'" style="background-color:lightgray;text-decoration:none;">Remove all items from Cart</a></span>';
}else{
    echo '<b style="color:darkred">Your Cart is empty</b>';
}

?>
</div>

	echo '<div align="center" style="position:absolute;left:0px;top:60px;">
					<?php
						if(isset($_SESSION['view'])==1){
							echo '<br><br><br><br> <a href="logout.php" class="button">LogOut</a> </div>';
						}else{
							echo '<br><br><br><br> <a href="#loginScreen" class="button">Click here to Log In</a> </div>
									<br><br><br><br> <a href="sign_up.php" class="button" style="position:absolute;top:20px;left:900px;" >Click here to SignIn</a>
		       	 				';
						}
					?>
		
		       	 	  <div id="loginScreen" style="background-color:white;color:gray">
		       	 	  <div style="margin-left:10px;">
		       	 	  <h2>Login to OrderAnythingOnline</h2>
		       	 	  <hr>
		       	 	  <br>
		       	 	  <br><br>
		       	 	  
		       	 	  
		       	 	  <form method="post" action="tests.php">
		       	 	 <font style="font-size:20px;">User Name </font>
		       	 	 <input style="border-radius:5px;width:180px;height:30px;" name="names" placeholder="Your Name" type="text">
		       	 	<br><br><br><br>
		       	 	 <font style="font-size:20px;">Password </font>
		       	 	 <input placeholder="***********" name="pass" style="border-radius:5px;font-size:18px;margin-left:10px;width:180px;height:30px;" type="password">
		       	 	<input type="submit" value="Login" name="sub" style="margin-left:5px;font-size:20px;color:white;margin-top:50px;;background-color:orange;width:310px;height:40px;border-radius:7px;">
					<div style="background-color:lightblue;margin-top:40px;width:320px;height:40px;">
					<b>Dont have an account?</b>
					<a href="food.php">SignUp!</a>
					
					</div>
					 <a href="#" class="cancel">&times;</a>
		       	 	 	</div>	
		       	 	 </div> <div id="cover" >';
				

					echo '<div align="center" style="position:absolute;left:0px;top:60px;">
					<a href="#" class="button">OrderAnthingOnline.com</a>
					
		       	 	
		       	 	  <div id="loginScreen1" style="background-color:white;color:gray">
		       	 	  
		       	 	 
					 </div>	
		       	 	 </div>
		       	 	 </form>
		       	 	  
		       	 	


</body>
</html>
