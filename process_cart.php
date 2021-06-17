<?php session_start();
include 'includes/config.php';
$uid=$_SESSION['uid'];
	if(isset($_GET['id']) AND isset($_GET['cat']) AND isset($_GET['rate']))
	{
		$id=$_GET['id'];
		$price=$_GET['rate'];
		$true=mysqli_query($conn,"select * from book where b_id=$id");
		$row=mysqli_fetch_assoc($true);
		$name=$row['b_nm'];
		$publisher=$row['b_publisher'];
		$subcat=$row['b_subcat'];
		$check=mysqli_query($conn,"select * from cart where b_id=$id AND u_id=$uid;");
		$row=mysqli_fetch_assoc($check);
		$rowcount=mysqli_num_rows($check);
		if ($rowcount==0) 
		{
			$query="INSERT INTO cart(u_id, b_id, b_nm, b_publisher, Category, qty, Rate) VALUES ($uid,$id,'$name','$publisher','$subcat',1,$price);";
		}
		else
		{
			$quantity=$row['qty']+1;
			$query="update cart set qty=$quantity where b_id=$id && u_id=$uid;";
		}
		
		$bi=mysqli_query($conn,$query);
		if ($bi) {
		 	header("location:viewcart.php");
		 }
		 var_dump($conn); 
	}
	if(isset($_GET['delete']) AND isset($_GET['id']))
	{
		$id=$_GET['id'];
        $price=$_GET['rate'];
		$query="delete from cart where b_id=$id AND u_id=$uid";
		$bi=mysqli_query($conn,$query);
		var_dump($conn);
		header("location:viewcart.php");	
	}
?>