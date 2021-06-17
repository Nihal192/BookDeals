<?php 
 
$to= "patelnihal56@gmail.com";
$subject="Forget Password";
$message="your password ";
$res=mail($to,$subject,$message);
if($res)
{
	echo "email  sent";
}
else
{
	echo "email not send";
}
?>