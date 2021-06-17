<?php
	
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['u_fnm']) || empty($_POST['USERNAME']) || empty($_POST['gender']) || empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['mail'])||empty($_POST['city']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		
		if($_POST['pwd']!=$_POST['cpwd'])
		{
			$msg.="<li>Please Enter your Password Again.....";
		}
		
  
		
		
		
		if(strlen($_POST['pwd'])<5)
		{
			$msg.="<li>Please Enter Your Password in limited Format....";
		}
		
		if(is_numeric($_POST['u_fnm']))
		{
			$msg.="<li>Name must be in String Format...";
		}


		if(strlen($_POST['contact'])<10)
		{
			$msg.="<li>Please Enter your 10 digit no";
		}
		
		if($msg!="")
		{
			header("location:register.php?error=".$msg);
		}
		else
		{
			$fnm=$_POST['u_fnm'];
			$unm=$_POST['USERNAME'];
			$pwd=$_POST['pwd'];
			$gender=$_POST['gender'];
			$email=$_POST['mail'];
			$contact=$_POST['contact'];
			$city=$_POST['city'];
			
			
	
  			
			
			$query="insert into user(u_fnm,u_unm,u_pwd,u_gender,u_email,u_contact,u_city)
			values('$fnm','$unm','$pwd','$gender','$email','$contact','$city')";
			
			$q=mysqli_query($conn,$query); 
			header("location:index.php");
		}
		
	}
	else
	{
		header("location:index.php");
	}
?>