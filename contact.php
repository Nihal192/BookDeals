<?php session_start();
$uid=$_SESSION['uid'];
require('includes/config.php');
?>


<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
</head>

<body>
			<!-- start header -->
					<div id="templatemo_container">
	<div id="templatemo_menu">
    	<ul>
            <?php
           include("includes/menu.inc.php");
           ?>
    </div> 
					<div id="logo-wrap">
						<div id="logo">
								<?php
									include("includes/logo.inc.php");
								?>
						</div>
					</div>
			<!-- end header -->
			
			<!-- start page -->

					<div id="page">
						<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title">Contact us</h1>
									
									<div class="entry" >

										<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">Your Query is Added and Solved in few days</font>';
												echo '<br><br>';
											}
										
										?>

									
										<form action="process_contact.php" method="POST">
												
<?php
$query=mysqli_query($conn,"select * from user where u_id=$uid;");
			$mail=mysqli_fetch_assoc($query);
?>
											<br>Name :<br>
												<input type='text' name='nm' size=35 disabled="true" value=<?php echo $mail['u_fnm']; ?>>
												<br><br><br>
																						
												Query:<br>
												<textarea cols="40" rows="10" name='query' required></textarea>
												<br><br><br>

												<input  type='submit' name='btn' value='   OK   '  >

												
										</form>
									
									</div>
									
								</div>
								
							</div>
						<!-- end content -->
						
						<!-- start sidebar -->
						
						<!-- end sidebar -->
						
						<div style="clear: both;">&nbsp;</div>
					</div>
			<!-- end page -->
						
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
