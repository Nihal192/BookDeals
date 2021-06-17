<?php
include('includes/config.php');
if(isset($_POST['rpass']) && !empty($_POST['rpass']) AND isset($_POST['email']) && !empty($_POST['email']))
{
	$newp=$_POST['rpass'];
	$email=$_POST['email'];
	$s=mysqli_query($conn,"update user set u_pwd='$newp' where u_email='$email'");
	if($s)
	{
		echo "Password Changed Successfully!";
		}
		}
		?>