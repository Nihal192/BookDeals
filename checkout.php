<?php
 session_start();
 extract($_POST);
require('includes/config.php'); 	
	//echo $uid;
	if(isset($submit))
	{
    $_SESSION['address']=$address;
    $_SESSION['phone']=$phone;
    $uid=$_SESSION['uid'];
	$query="insert into shipping_details(name,address,city,state,phone,u_id) values('$name','$address','$city','$state','$phone','$uid')";




  
	$res=mysqli_query($conn,$query);
  
  
  header("location:payment_details.php");
	}

?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<bod action="process_checkout.php"y>
			<!-- start header -->
				  <!-- start header -->
              <div id="templatemo_container">
  <div id="templatemo_menu">
      <ul>
            <?php
           include("includes/menu.inc.php");
           ?>
    </div> <!-- end of menu -->

				<div id="logo-wrap">
				<div id="logo">
						<?php
							include("includes/logo.inc.php");
						?>
				</div>
				</div>
				
	
	<table align="center">	
      <tr>

    		<form id="checkout" method="POST" action="checkout.php"> 
    			<tr>
    			<br>
    			<td><p class="contact"><label for="name">Name</label></p></td> 
    			<td><input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"></td>
    		</tr>
    			
    			<tr>
    			<td><p class="contact"><label for="email">Address</label></p></td> 
    			<td><textarea id="address" name="address" placeholder="Address" required="" cols="55" row="10"type="email"> </textarea></td>
    		</tr>
                
            
    			 <tr>
            <td><p class="contact"><label for="email">city</label></p></td> 
           <td><select name="city">
    <option value="volvo">surat</option>
    <option value="saab">rajkot</option>
    <option value="fiat">vapi</option>
   
  </select></td>
                </tr>
                <tr>
                <td><p class="contact"><label for="state">State</label></p></td> 
    			<td><select name="state">
    			  <option value="volvo">Gujrat</option>	
                 </tr>
             </select></td>
                 <tr>         
            <td><p class="contact"><label for="phone">Mobile phone</label></p></td> 
            <td><input id="phone" name="phone" placeholder="phone number" required="" type="text"></td>
            </tr>
             <br>
              <tr>

             <td><button class="button" name="submit" id="submit" tabindex="5">Confirm & Proceed</button></td> 	 
         </tr>
   </form> 
</div>      
</div>
</body>