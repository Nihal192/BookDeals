<?php
include('includes/config.php');
session_start();
if(!isset($_SESSION['status']))
{
	header("Location:index.php");
	die();
}
	else
	{
	
			
	}
$id=isset($_SESSION['uid'])?$_SESSION['uid']:'';
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script language="javascript" type="text/javascript">
		$(document).ready( function(){
			$('#confpass').hide();
			$('#conf').hide();
			

		$('#edit').click(function() {
	 event.preventDefault();
	 $('#confpass').show();
			$('#conf').show();
        $('#fnm').prop('disabled', false);
        $('#email').prop('disabled', false);
        $('#pass').prop('disabled', false);
      
        
	
 
   
        $('#contact').prop('disabled', false);
		});
		$('#updt').click(function(){
			var fn=$('#fnm').val();
       
        var pass=$('#pass').val();
    
        var contact=$('#contact').val();
        
        	$.ajax({
			
			type:"POST",
			url: "changeprof1.php",
			data:{sname:name,pass:pass,contact:contact,fn:fn},
	
			success:function(response){
				alert(response);
			}
        });
		});
		$('#canc').click(function(){
				location.reload();
		});
});

	
	  $(document).on('change',"#contact", function(){
		  var phoneno = /^\d{10}$/;
		  var contn= $('#contact').val();
		   if(contn.match(phoneno))
        {
      return true;
        }
      else
        {
        alert("Contact Number Incorrect");
       $("#contact").val('');
				$("#contact").focus();
        }
	  });
	 $(document).on('change',"#confpass", function(){
		 var rpass=$(this).val();
		 var pass=$('#pass').val();
		 if(rpass==pass)
		{
			return true;
		}
		else
		{
			alert('Password mismatched,Enter password again correctly...');
			$("#pass").val('');
			$("#confpass").val('');
			$("#pass").focus();
		}
		
	});
		</script>
		<style>
		input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
input[type=number],[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
textarea:focus {
  border: 3px solid #555;
}
textarea {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
  height:120px;
}

input[type=number],[type=password]:focus {
  border: 3px solid #555;
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
.center {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}
select {
    border: 1px solid #000;
    background-color: transparent;
	font-color:#000000;
}

</style>
		</head>
		<body>
		<a href="index.php"><--Go Back</a><div class="center">
	<table style="margin-left:40px">
	<?php
	 $s1=mysqli_query($conn,"select * from user where u_id='$id'");
	 while($res=mysqli_fetch_array($s1))
	 {
	 	
	?>
	<input type="hidden" id="uid" value="<?php echo $res['type']; ?>">
		<font size="18px">
		<tr>
			<td>
 Name:<br><input type ="text" id="fnm" value="<?php echo $res['u_fnm']; ?>" name="txtname" disabled>
</td>
</tr>
<tr>
	<td>

Password:<br><input type ="password" id="pass" value="<?php echo $res['u_pwd'];?>"name="txtpass" disabled>
</td>
<td>

<label for="confpass" id="conf">Confirm Password:</label><br><input type ="password" style="width:150px" id="confpass" >
</td>
</tr>
<tr>
	<td>
 Mobile No:<br><input type ="text" id="contact" value="<?php echo $res['u_contact'];?>"name="txtmob" disabled>
</td>
</tr>



	
		<?php } ?><tr>
			<td>
			<br><br>
				<input class="button button1" style="width:120px;height:50px;margin-left:200px" type="submit" id="edit" value="Edit">
			</td>
			<td>
			<br><br>
				<input class="button button1" style="width:120px;height:50px" type="submit" id="updt" value="Update">
			</td>
			<td>
			<br><br>
				<input type="submit" class="button button2" style="width:120px;height:50px" id="canc" value="Cancel">
			</td>
		</tr>
</font>

</table>
</div>
