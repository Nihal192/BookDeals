<?php
require('includes/config.php');	
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['postal_code']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		
		
				
		if(is_numeric($_POST['nm']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		
		if(!preg_match("^[a-z0-9_]+[a-z0-9_.]*@[a-z0-9_-]+[a-z0-9_.-]*\.[a-z]{2,5}$",$_POST['email']))
		{
			$msg.="<li>Please Enter Your Valid Email Address...";
		}
		
		
	if($msg!="")
		{
			header("location:contact.php?error=".$msg);
		}
		

		else
		{
			$nm=$_POST['nm'];
			$email=$_POST['email'];
			$question=$_POST['query'];
			
			
			$query="insert into shipping(con_nm,con_email,con_query)
			values('$nm','$email','$question')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			
			header("location:checkout.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>