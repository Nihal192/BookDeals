
<?php
include('includes/config.php');
session_start();
if(isset($_SESSION['uid']))
{
$id=$_SESSION['uid'];

if(isset($_POST['pass']) && isset($_POST['contact']) && isset($_POST['fn']) )
{

	
	$pass=$_POST['pass'];
	$conntact=$_POST['contact'];
	
	
	$fn=$_POST['fn'];
	
	
			$c=mysqli_query($conn,"UPDATE user SET u_fnm='$fn',u_contact='$conntact',u_pwd='$pass' WHERE u_id='$id'");
			if($c)
			{
				echo "Profile Changes Saved!";
			}
			else
			{
				

				mysqli_error($conn);
			}
		
}
else
{
	echo "Enter Data!";
}



}

else
{
	echo "Login First!";
}
?>