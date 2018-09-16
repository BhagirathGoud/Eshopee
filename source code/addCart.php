<?php
session_start();
include("config.php");
if(isset($_SESSION['username']))
{
$username = $_SESSION['username'];
	$pid = intval($_GET['pid']);
                  $qty = intval($_GET['qty']);
	if(!$pid && !$qty)
	{
		die("failed");
	}	
                 $add = "insert  into `cart` values(NULL,'$username','$pid','$qty')";
	$add2 = mysql_query("$add");
	die("success");
}
else
{
die("failed");


}
?>
