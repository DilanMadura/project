<?php
	session_start();
	$id=$_SESSION['last'];
	$reg=$_SESSION['re'];
	$na=$_SESSION['n'];
	$add=$_SESSION['addrs'];
	$phu=$_SESSION['phu'];

	$date = date('Y-m-d H:i:s');
	//$reg=$_SESSION['reg'];
		
	$invoice = uniqid();
	
	$name="hai";
	require("pdf/fpdf.php");
	$pdf=new FPDF();
	
	$pdf->AddPage();
	//$pdf->write(8,"OrderAnythingOnline.com");
	//$pdf->write(5,"hellojlk");
	$pdf->SetFont("Arial","B","20");
	$pdf->Cell(0,10,"OrderAnythingOnline.com",1,2,"C");
	
	$pdf->SetFont("Arial","B","11");
	$pdf->Cell(0,10,"Order Date :$date\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInvoice No:$invoice",1,1,"R");
	
	$pdf->write(8,"\n");
	//$pdf->Image('down.png',10,10,-300);
	$pdf->write(8,"Shipping Adddress");
	
	
	
	
	$pdf->write(8,"\n\nName : $na");
	$pdf->write(8,"\nAddress : $add");
	$pdf->write(8,"\nPhone No : $phu");
	$pdf->write(8,"\nCountry : $reg");
	$pdf->write(6,"\n\n\n");
	
	
	$pdf->Cell(50,10,"product_code",1,"L");
	$pdf->Cell(50,10,"Name",1,"L");
	$pdf->Cell(20,10,"Quantity",1,"L");
	$pdf->Cell(30,10,"Price",1,1,"L");
	
	
?>
	
	
	<?php
 	include 'config.php';
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT product_name,product_desc, price FROM services WHERE product_code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		   
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);
			$quan=$cart_itm['qty'];
			$price=$cart_itm["price"];
			$namek=$obj->product_name;
			
			
			
			$pdf->Cell(50,10,"$product_code",1,"L");
			$pdf->Cell(50,10,"$namek",1,"L");
			$pdf->Cell(20,10,"$quan",1,"L");
			$pdf->Cell(30,10,"$$price",1,1,"L");
	
			
			
			$cart_items ++;
		
		
        }
    
		$tot=$currency.$total;
		
		$pdf->write(8,"\n\nTotal Amount : $tot\n\n\n\n");
		$pdf->write(4,"Contact us at personalAgent@gmail.com if you have questions about your order.");
		$pdf->Output();
	
		
    }else{
		echo 'Your Cart is empty';
	}

	?>
    
    </div>
