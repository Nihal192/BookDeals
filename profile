<?php
$mysqli = new mysqli("localhost", "root", "");

$query = "SELECT u_fnm,u_nm,u_gender,u_email,u_contact,u_cityFROM user WHERE u_fnm = '".$_SESSION['u_fnm']."'";
if($result = $mysqli->query($query))
{
    while($row = $result->fetch_assoc())
    {
        echo "<div align=\"center\">";
        echo "<br />Your <b><i>Profile</i></b> is as follows:<br />";
        echo "<b>First name:</b> ". $row['u_fnm'];
        echo "<br /><b>gender:</b> ".$row['u_gender'];
        echo "<br /><b>gender:</b> ".$row['u_email'];
        echo "<br /><b>Year:</b> ".$row['u_contact'];
        echo "<br /><b>Gender:</b> ".$row['u_city'];
        echo "</div>"   
    }
    $result->free();
}
else
{
    echo "No results found";
}
?>