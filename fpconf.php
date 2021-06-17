<?php
include('includes/config.php');
	if(isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['fid']) && !empty($_POST['fid']))
	{
		$email=mysqli_escape_string($conn,$_POST['email']);
		$fid=mysqli_escape_string($conn,$_POST['fid']);
		$s=mysqli_query($conn,"select u_id from user where u_email='$email'");
		$sec=mysqli_fetch_assoc($s);
		
		$uid=$sec['u_id'];
		$ver=mysqli_query($conn,"select * from password_forget where u_id='$uid' AND f_id='$fid'");
		$s=mysqli_num_rows($ver);
		if($s>0)
		{
		echo "1";
		}
		else
		{
		echo "2";
		}
		
	}
	
?>