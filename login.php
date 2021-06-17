<html>
<head> 
	<?php
			include("includes/head.inc.php");
		?>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
</head>
<body>	
	
<?php
						require('includes/config.php');
							if(isset($_SESSION['status']))
							{
								echo '<p><marquee  direction="right" behavior="alternate">Hello :  '.$_SESSION['unm'].'</marquee></p>';
							}
							else
							{
								echo '<form action="process_login.php" method="POST">
										<h1>LogIn</h1>
											<b>Username:</b>
											<br><input type="text" name="usernm"><br>
											<br>
											
											
											<b>Password:</b>
											<br><input type="password" name="pwd">
											<br><br><input type="submit" id="x" value="Login" />
										</form>';
							}
						?>

</body>
</html>						