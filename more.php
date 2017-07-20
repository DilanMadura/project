 
<link href="style/help.css" rel="stylesheet" type="text/css">
<img src="images/header_overlay.png" width="1345px" height="106px" />
<div class="shopping-cart" style="position: absolute;left: 920px;width: 350px;top:170px">
	<style>
		body{margin: auto;
	padding-left: 0px;
	background: url("images/back2.png") ;
	</style>
<h2>Your Shopping Cart</h2>
<?php
	
session_start();

//$uts1=$_SESSION['uts1'];

//$uts=$_SESSION['uts'];
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
//print_r($current_url);   
 	
	$current_code= $_SESSION['yak'];
	
if(isset($_SESSION["products"]))
{
	//header("location:config.php");
    $total = 0;
    echo '<ol>';
	$arrsk=0;
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<font style="font-size:18px"><span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo $cart_itm["name"].'</font>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Quantity : '.$cart_itm["qty"].'</div>';
		//if($cart_itm["code"]==$uts1){
		//	$cart_itm["price"]=$uts;
        echo '<div class="p-price">Price :<b style="font-size:15px;color:darkgreen">'.$cart_itm["price"].'</b></div>';
		//}
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
	
		$arrsk= $cart_itm['code'];
		
    }
	
	echo $arrsk;
    echo '</ol><b>';
    echo '<span class="check-out-txt"><strong>Total : <b style="color:darkgreen;font-size:20px">'.$total.'</b><br><br></strong> <a href="view_cart.php" style="background-color:yellow;padding:5px;"><b>Proceed To CheckOut</b></a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1 119" style="background-color:lightgray;text-decoration:none;">Remove all items from Cart</a></span>';
	echo "<b><br><br><a href='index.php'>Continue Shopping</a></b>";
}else{
    echo '<b style="color:darkred">Your Cart is empty</b>';
}
		
?>
</div>


<?php
require 'config.php';
		$sql = "select * from services where product_code='$current_code'";
		
		$row=mysqli_query($mysqli,$sql);
		
		echo "<div style='margin-top:50px;margin-left:160px;'>";
		while($rows=mysqli_fetch_array($row)){
			
			echo "<img class='image' src='images/$rows[5]' style='width:300px;height:300px;float:left;padding:5px;'>";
			echo "<div style='background-color:whitesmoke;color:gray;width:650px;padding:10px;height:300px;'>";
			echo "<h1 style='color:black'>$rows[4]</h1>";
			echo "<p style='color:black' >$rows[9]</p>";
			echo "<b >E-Mail Us: $rows[3]</b><br>";
			echo "<b>Contact Us: $rows[2]</b>";
			echo "</div>";
			echo "</div>";
			
			
			
			
			
			
					



  //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM services where product_code='$rows[0]'");
	}
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="product" style="margin-top:27px;width:300px;margin-left:155px;">'; 
            echo '<form method="post" action="cart_update.php">';
			echo '<div class="product-thumb"><a href="#"><img class="imgs" style="width:100px;height:100px" src="images/'.$obj->product_img_name.'"></a></div>';
            echo '<div class="product-content"><h3>'.$obj->product_name.'(Large)</h3>';
           // echo '<div class="product-desc">'.$obj->description.'</div>';
            echo '<div class="product-info">';
			echo 'Price '.($currency.$obj->price+56).' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
			
			
			echo '<div class="product" style="width:300px;position:absolute;left:500px;top:500px;">'; 
            echo '<form method="post" action="cart_update.php">';
			echo '<div class="product-thumb"><a href="#"><img class="imgs" style="width:100px;height:100px" src="images/'.$obj->product_img_name.'"></a></div>';
            echo '<div class="product-content"><h3>'.$obj->product_name.'(Small)</h3>';
           // echo '<div class="product-desc">'.$obj->description.'</div>';
            echo '<div class="product-info">';
			 $s=($currency.$obj->price);
				$s=($s+3);			
				print_r($s);
			echo 'Price '.$s.' | ';
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
   
			

<b style="border-bo"></b>






