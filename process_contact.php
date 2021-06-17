<?php
require('includes/config.php');	
session_start();
$uid=$_SESSION['uid'];
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['query']))
		{
			$msg.="<li>Please full fill all requirement";
		}	
		if(is_numeric($_POST['nm']))
		{
			$msg.="<li>Name must be in String Format...";
		}
	if($msg!="")
		{
			header("location:contact.php?error=".$msg);
		}
		else
		{
			$query=mysqli_query($conn,"select * from user where u_id=$uid;");
			$mail=mysqli_fetch_assoc($query);
			$nm=$mail['u_fnm'];
			$email=$mail['u_email'];
			$question=$_POST['query'];
			$query="insert into contact(con_nm,con_email,con_query)
			values('$nm','$email','$question')";
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:contact.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>