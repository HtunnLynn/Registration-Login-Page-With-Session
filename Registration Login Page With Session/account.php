<?php
session_start();
error_reporting(1);
if($_SESSION['mail']=="")
{
header('location:index.php');
}
else{
 ?>


<table width="604" align="center" bgcolor="#EFEFEF" border="1">
  <tr>
    <td width="763" height="41"><p align="center" style="color:#0033FF">Welcome <?php echo $_SESSION['mail'];?></p></td>
    <td width="125"><a href="logout.php">Logout</a></td>
  </tr>
  <tr>
    <td height="374">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;</td>
  </tr>
</table>
<?php }  ?>