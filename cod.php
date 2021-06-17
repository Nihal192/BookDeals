<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
            include("includes/head.inc.php");
        ?>
</head>
<body>
  <P> we have recieved your order. your order will be dilivered soon.</P>


          <table style="border-width: 9px;border-style: solid; border-bottom-color: black;font-family:TimesNewRoman; font-style: italic;  font-size: large;">
            <th>address</th>
              <tr>
              <td style="border-width: 5px;border-style: solid; font-family:TimesNewRoman;font-style: italic; font-size: large;  font-variant: small-caps; ">
                <?php 
                   echo '<li><a href="index.php">Back To Home Page</li>';
                 ?>

              </td>
            </tr>
          </table>
</body>
</html>