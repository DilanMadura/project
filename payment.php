<head>
	<link href="style/help.css" rel="stylesheet" type="text/css"></head>
	<style>
		#header{
				background-color:#eee;
				position: fixed;
				width: 100%;
				left:0px;
				top:0px;
				height:80px;
				border:1px solid;
			}
			td{
					padding:15px;
				}
	</style>
</head>
<body>
		<div id="header">
			<h1 style="font-size: 30px;color: gray;margin-left: 15px;">OrderAnythingOnline.com</h1>
			
		</div>
<?php


	session_start();
	
	
	
	$region= $_POST['region'];
	$_SESSION['re']=$region;
	
	$name =$_POST['name'];
	$_SESSION['n']=$_POST['name'];
	
	$addrs= $_POST['addrs'];
	$_SESSION['addrs']= $addrs;
	
	$addrs1= $_POST['addrs1'];
	$city= $_POST['city'];
	$state= $_POST['state'];
	$zip= $_POST['sp'];
	
	$phone= $_POST['phn'];
	$_SESSION['phu']= $phone;
	
	include 'config.php';
	
	$auto = uniqid();
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	
	
	$sql="INSERT INTO  ship VALUES ('$auto', '$region', '$name', '$addrs', '$addrs1', '$city', '$state', '$zip', '$phone');";

	if(mysqli_query($mysqli,$sql)){
		echo "success";
	}	else {
		//echo "awl".mysqli_error($con);
	}
	
	?>
	<div class="view-cart" style="width: 280px;margin-left: 1050px;margin-top: 80px; ">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="paypal-express-checkout/process.php">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT product_name,product_desc, price FROM services WHERE product_code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		    echo '<li class="cart-itm">';
			echo '<div class="p-price">'.$currency.$obj->price.'</div>';
            echo '<div class="product-info">';
			echo '<h3>'.$obj->product_name.' (Code :'.$product_code.')</h3> ';
            echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
            echo '<div>'.$obj->product_desc.'</div>';
			echo '</div>';
            echo '</li>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_desc.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<span class="check-out-txt">';
		echo '<strong>Total : '.$currency.$total.'</strong>  ';
		$tot=$currency.$total;
		echo '</form>';
		
    }else{
		echo 'Your Cart is empty';
	}
	?>
    
    </div>
    <div style="background-color: lightgray; width: 250px;border-radius:5px ;height: 550px;margin-top: 115px;margin-left: 120px;padding: 5px;">
    	<font>Your Order Total</font><br />
		<b style="margin-left:100px;font-size: 30px;"><?php echo $tot?></b>
		<hr />
		You'll Complete your purchase here.
    </div>
    <div style="background-color: whitesmoke;width: 550px;height:460px;position: absolute;left: 420px;top: 200px;"><br />
    	<b style="padding: 35px;color: darkblue">Don't have a paypal account?</b><br />
    	<font style="color: gray;margin-left: 70px;">(Optional) Join PayPal for faster future checkout</font><br /><br />
    	<hr />
    	<form method="post" action="invoice.php">
    		<table>
    			<tr>
    				<td>Country</td><td>
    					<select name="region" style="width: 320px;height: 27px;">
				
				
				<option >Abkhazia</option>
				<option> Georgia</option>
				<option >Afghanistan</option>
				<option >Albania</option>
				<option >Algeria</option>
				<option >American Samoa</option>
				<option >Andorra</option>
				<option >Angola</option>
				<option >Anguilla</option>
				<option >Antarctica</option>
				<option >Antigua &amp; Barbuda</option>
				<option >Argentina</option>
				<option value="am">Armenia</option>
				<option value="aw">Aruba</option>
				<option value="au">Australia</option>
				<option value="at">Austria</option>
				<option value="az">Azerbaijan</option>
				<option value="bs">Bahamas</option>
				<option value="bh">Bahrain</option>
				<option value="bd">Bangladesh</option>
				<option value="bb">Barbados</option>
				<option value="by">Belarus</option>
				<option value="be">Belgium</option>
				<option value="bz">Belize</option>
				<option value="bj">Benin</option>
				<option value="bm">Bermuda</option>
				<option value="bt">Bhutan</option>
				<option value="bo">Bolivia</option>
				<option value="bq">Bonaire St Eustatius and Saba</option>
				<option value="ba">Bosnia and Herzegovina</option>
				<option value="bw">Botswana</option>
				<option value="bv">Bouvet Island</option>
				<option value="br">Brazil</option>
				<option value="io">British Indian Ocean Territory</option>
				<option value="vg">British Virgin Islands</option>
				<option value="bn">Brunei</option>
				<option value="bg">Bulgaria</option>
				<option value="bf">Burkina Faso</option>
				<option value="bi">Burundi</option>
				<option value="kh">Cambodia</option>
				<option value="cm">Cameroon</option>
				<option value="ca">Canada</option>
				<option value="cv">Cape Verde</option>
				<option value="ky">Cayman Islands</option>
				<option value="cf">Central Africa Republic</option>
				<option value="td">Chad</option>
				<option value="cl">Chile</option>
				<option value="cn">China</option>
				<option value="cx">Christmas Island</option>
				<option value="cc">Cocos (K) I.</option>
				<option value="co">Colombia</option>
				<option value="km">Comoros</option>
				<option value="cg">Congo</option>
				<option value="ck">Cook Islands</option>
				<option value="cr">Costa Rica</option>
				<option value="xc">Crimea</option>
				<option value="hr">Croatia</option>
				<option value="cw">CuraÃ§ao</option>
				<option value="cy">Cyprus</option>
				<option value="cz">Czech Republic</option>
				<option value="cd">Democratic Republic of the Congo</option>
				<option value="dk">Denmark</option>
				<option value="dj">Djibouti</option>
				<option value="dm">Dominica</option>
				<option value="do">Dominican Republic</option>
				<option value="tl">East Timor</option>
				<option value="ec">Ecuador</option>
				<option value="eg">Egypt</option>
				<option value="sv">El Salvador</option>
				<option value="gq">Equitorial Guinea</option>
				<option value="er">Eritrea</option>
				<option value="ee">Estonia</option>
				<option value="et">Ethiopia</option>
				<option value="fk">Falkland Islands (Malvinas)</option>
				<option value="fo">Faroe Islands</option>
				<option value="fj">Fiji</option>
				<option value="fi">Finland</option>
				<option value="fr">France</option>
				<option value="gf">French Guyana</option>
				<option value="pf">French Polynesia</option>
				<option value="tf">French Southern Territories</option>
				<option value="ga">Gabon</option>
				<option value="gm">Gambia</option>
				<option value="ge">Georgia</option>
				<option value="de">Germany</option>
				<option value="gh">Ghana</option>
				<option value="gi">Gibraltar</option>
				<option value="gr">Greece</option>
				<option value="gl">Greenland</option>
				<option value="gd">Grenada</option>
				<option value="gp">Guadeloupe</option>
				<option value="gu">Guam</option>
				<option value="gt">Guatemala</option>
				<option value="gg">Guernsey</option>
				<option value="gn">Guinea</option>
				<option value="gw">Guinea-Bissau</option>
				<option value="gy">Guyana</option>
				<option value="ht">Haiti</option>
				<option value="hm">Heard and McDonald Islands</option>
				<option value="hn">Honduras</option>
				<option value="hk">Hong Kong</option>
				<option value="hu">Hungary</option>
				<option value="is">Iceland</option>
				<option value="in">India</option>
				<option value="id">Indonesia</option>
				<option value="ir">Iran</option>
				<option value="iq">Iraq</option>
				<option value="ie">Ireland</option>
				<option value="im">Isle of Man</option>
				<option value="il">Israel</option>
				<option value="it">Italy</option>
				<option value="ci">Ivory Coast</option>
				<option value="jm">Jamaica</option>
				<option value="jp">Japan</option>
				<option value="je">Jersey</option>
				<option value="jo">Jordan</option>
				<option value="kz">Kazakhstan</option>
				<option value="ke">Kenya</option>
				<option value="ki">Kiribati</option>
				<option value="xk">Kosovo</option>
				<option value="kw">Kuwait</option>
				<option value="kg">Kyrgyzstan</option>
				<option value="la">Laos</option>
				<option value="lv">Latvia</option>
				<option value="lb">Lebanon</option>
				<option value="ls">Lesotho</option>
				<option value="lr">Liberia</option>
				<option value="ly">Libya</option>
				<option value="li">Liechtenstein</option>
				<option value="lt">Lithuania</option>
				<option value="lu">Luxembourg</option>
				<option value="mo">Macao</option>
				<option value="mk">Macedonia</option>
				<option value="mg">Madagascar</option>
				<option value="mw">Malawi</option>
				<option value="my">Malaysia</option>
				<option value="mv">Maldives</option>
				<option value="ml">Mali</option>
				<option value="mt">Malta</option>
				<option value="mh">Marshall Islands</option>
				<option value="mq">Martinique</option>
				<option value="mr">Mauritania</option>
				<option value="mu">Mauritius</option>
				<option value="yt">Mayotte</option>
				<option value="mx">Mexico</option>
				<option value="fm">Micronesia</option>
				<option value="md">Moldova</option>
				<option value="mc">Monaco</option>
				<option value="mn">Mongolia</option>
				<option value="me">Montenegro</option>
				<option value="ms">Montserrat</option>
				<option value="ma">Morocco</option>
				<option value="mz">Mozambique</option>
				<option value="mm">Myanmar</option>
				<option value="na">Namibia</option>
				<option value="nr">Nauru</option>
				<option value="np">Nepal</option>
				<option value="nl">Netherlands</option>
				<option value="nc">New Caledonia</option>
				<option value="nz">New Zealand</option>
				<option value="ni">Nicaragua</option>
				<option value="ne">Niger</option>
				<option value="ng">Nigeria</option>
				<option value="nu">Niue</option>
				<option value="nf">Norfolk Island</option>
				<option value="kp">North Korea</option>
				<option value="mp">Northern Mariana Islands</option>
				<option value="no">Norway</option>
				<option value="om">Oman</option>
				<option value="pk">Pakistan</option>
				<option value="pw">Palau</option>
				<option value="ps">Palestinian Territory</option>
				<option value="pa">Panama</option>
				<option value="pg">Papua New Guinea</option>
				<option value="py">Paraguay</option>
				<option value="pe">Peru</option>
				<option value="ph">Philippines</option>
				<option value="pn">Pitcairn</option>
				<option value="pl">Poland</option>
				<option value="pt">Portugal</option>
				<option value="pr">Puerto Rico</option>
				<option value="qa">Qatar</option>
				<option value="re">Reunion</option>
				<option value="ro">Romania</option>
				<option value="ru">Russia</option>
				<option value="rw">Rwanda</option>
				<option value="bl">Saint Barts</option>
				<option value="kn">Saint Kitts and Nevis</option>
				<option value="lc">Saint Lucia</option>
				<option value="mf">Saint Martin</option>
				<option value="vc">Saint Vincent &amp; Grenadines</option>
				<option value="ws">Samoa</option>
				<option value="sm">San Marino</option>
				<option value="sa">Saudi Arabia</option>
				<option value="sn">Senegal</option>
				<option value="rs">Serbia</option>
				<option value="sc">Seychelles</option>
				<option value="sl">Sierra Leone</option>
				<option value="sg">Singapore</option>
				<option value="sk">Slovakia</option>
				<option value="si">Slovenia</option>
				<option value="sb">Solomon Islands</option>
				<option value="so">Somalia</option>
				<option value="za">South Africa</option>
				<option value="gs">South Georgia and the South Sandwiâ€¦</option>
				<option value="kr">South Korea</option>
				<option value="es">Spain</option>
				<option value="lk">Sri Lanka</option>
				<option value="sh">St. Helena</option>
				<option value="sx">St. Maarten</option>
				<option value="pm">St. Pierre and Miquelon</option>
				<option value="sd">Sudan</option>
				<option value="sr">Suriname</option>
				<option value="sj">Svalbard &amp; Jan Mayen</option>
				<option value="sz">Swaziland</option>
				<option value="se">Sweden</option>
				<option value="ch">Switzerland</option>
				<option value="sy">Syria</option>
				<option value="st">SÃ£o TomÃ© and PrÃ­ncipe</option>
				<option value="tw">Taiwan</option>
				<option value="tj">Tajikistan</option>
				<option value="tz">Tanzania</option>
				<option value="th">Thailand</option>
				<option value="tg">Togo</option>
				<option value="tk">Tokelau</option>
				<option value="to">Tonga</option>
				<option value="tt">Trinidad and Tobago</option>
				<option value="tn">Tunisia</option>
				<option value="tr">Turkey</option>
				<option value="tm">Turkmenistan</option>
				<option value="tc">Turks &amp; Caicos Islands</option>
				<option value="tv">Tuvalu</option>
				<option value="vi">U.S. Virgin Islands </option>
				<option value="ug">Uganda</option>
				<option value="ua">Ukraine</option>
				<option value="ae">United Arab Emirates</option>
				<option value="gb">United Kingdom</option>
				<option value="um">United States Minor Outlying Islanâ€¦</option>
				<option value="us">United States of America</option>
				<option value="uy">Uruguay</option>
				<option value="uz">Uzbekistan</option>
				<option value="vu">Vanuatu</option>
				<option value="va">Vatican City </option>
				<option value="ve">Venezuela</option>
				<option value="vn">Vietnam</option>
				<option value="wf">Wallis and Futuna</option>
				<option value="ye">Yemen</option>
				<option value="zm">Zambia</option>
				<option value="zw">Zimbabwe</option>
			</select></td> </tr>
    					
    				</td>
    			</tr><tr>
    				<td>Card Number</td>
    				<td><input type="text" name="card" required="required" > </td>
    			</tr><tr>
    				<td>Payment Types</td><td><img src="images/mast.jpg" width="50px;">
    					<input type="radio" value="MasterCard" name="radio" checked="checked">
    					<img src="images/visa.png" width="50px;">
    					<input type="radio" value="Visa" name="radio">
    					<img src="images/dis.png" width="50px;">
    					<input type="radio" value="Discover" name="radio">
    				</td>
				</tr>
				<tr>
					<td>
						Expiration Date
					</td><td><input type="text" placeholder="mm/yy" name="dates" required="required"> </td>
				</tr>
				<tr>
					<td>
						CSC
					</td><td><input type="text"  style="width: 75px;" name="csc" required="required" > </td>
				</tr>
				<tr>
					<td>.</td><td><input type="submit" value="Pay" style="width: 100px;height: 25px"> </td>
				</tr>
    		</table>
    	</form>
    </div>
</div>
