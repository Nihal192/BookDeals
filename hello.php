<?php 
 session_start();
 require('includes/config.php');
 $id=$_SESSION['uid'];
 $t=mysqli_query($conn,"select * from cart where u_id='".$id."';");
 while($row=mysqli_fetch_assoc($t))
 {
 	$query=mysqli_query($conn,"select * from shipping_details where u_id=$id");
 	$r=mysqli_fetch_assoc($query);
 	$bid=$row['b_id'];
 	$name=$row['b_nm'];
 	$publisher=$row['b_publisher'];
 	$phone=$_SESSION['phone'];
 	$address=$_SESSION['address'];
 	$price=$row['Rate'];
 	$true=mysqli_query($conn,"INSERT INTO transaction(u_id, b_id, `b_nm`, `b_publisher`, `address`, `phone`,Price) VALUES ($id,$bid,'$name','$publisher','$address','$phone',$price);");	
 	if($true)
  	{
    		mysqli_query($conn,"delete from cart where u_id='$id'");
	}
 }
 ?>


 <html>
 <head>
 	<title> Last page</title>
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
    <style>
    	p.a { 
    word-spacing: normal;
    }
    </style>
 </head>
 <body>
	<div id="templatemo_container">
		<div id="templatemo_menu">
    		<ul>
    	        <?php
    	       include("includes/menu.inc.php");
    	       ?>
    	    </ul>
    	</div> <!-- end of menu -->
 	<?php            
 	    echo'we have recived your order check your details<br>';
		echo'<a href="index.php">click here to go back to homepage</a>';
 	?>	
 	       <table style="border-width: 2px;border-style: solid; border-bottom-color: black;font-family:TimesNewRoman; font-style: italic;  font-size: large;">
				<tr>	
 	        		<th>address</th>
 	        		<th> Book Name</th>
					<th> Name</th>
 	        		<th>Book_id</th>
 	        		<th>Book publsiher</th>
					<th> phone Number</th>
					<th> Date and time</th>
 	        		<th>Total</th>
 	        	</tr>			
 	    <?php
 	    	$f_id=$_SESSION['uid'];
 	        $q='select * from transaction where u_id='.$f_id.' ORDER BY datetime DESC;';
 	       $query= mysqli_query($conn,$q);
 	  	    while($row=mysqli_fetch_assoc($query)) 
 	        { 
 	          $q=mysqli_query($conn,"select * from user where u_id=$f_id");
 	          $r=mysqli_fetch_assoc($q); 	     	 	     
 	        ?>
 	        <tr>
 	        	<td style="border-width: 2px;border-style: solid; font-family:TimesNewRoman;font-style: italic; font-size: large;  font-variant: small-caps;" width="50">
 	        		<?php echo $row['address'];
 	        		 ?>

 	        	</td>
 	        	<td style="border-width: 5px;border-style: solid;border-bottom-color: grey; font-family:TimesNewRoman; font-style: italic;  font-size: large;  font-variant: small-caps; font-weight: bold;">
 	        		<?php echo $row['b_nm']; ?>
 	        	</td>
 	        	<td style="border-width: 5px;border-style: solid; border-bottom-color: black;font-family:TimesNewRoman;font-style: italic;  font-size: large;  font-variant: small-caps; font-weight: bold;">
 	        		<?php echo $r['u_fnm']." ".$r['u_unm']; ?>
 	        	</td>
 	        	<td style="border-width: 5px;border-style: solid; border-bottom-color: coral;font-family:TimesNewRoman;font-style: italic; font-size: large;  font-variant: small-caps; font-weight: bold;">
 	        		<?php echo $row['b_id']; ?>
 	        	</td>
 	        	<td style="border-width: 5px;border-style: solid; border-bottom-color: coral; font-family:TimesNewRoman;font-style: italic; font-size: large;  font-variant: small-caps; font-weight: bold;">
 	        		<?php echo $row['b_publisher']; ?>
 	        	</td>
  	        	<td style="border-width: 5px;border-style: solid; border-bottom-color: coral; font-family:TimesNewRoman;font-style: italic; font-size: large;  font-variant: small-caps; font-weight: bold;">
 	        		<?php echo $row['phone']; ?>
 	        	</td>
 	        	<td style="border-width: 5px;border-style: solid; font-family:TimesNewRoman;font-style: italic; font-size: large;  font-variant: small-caps; ">
 	        		<?php echo $row['datetime'];
 	        		 ?>
        		</td>
        		<td style="border-width: 5px;border-style: solid; font-family:TimesNewRoman;font-style: italic; font-size: large;  font-variant: small-caps; ">
        			<?php echo $row['Price'];
        			 ?>
        		</td>
        	</tr>     	
 	         <?php }  ?>
 	    </table>
 	 </div>
 	</body>
</html>