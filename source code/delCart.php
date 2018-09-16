<?php
session_start();
include("config.php");
$username = $_SESSION['username'];
	$id = intval($_GET['pid']);
                  $qty = intval($_GET['qt']);
	if(!$id && !$qty)
	{
		die('Error: No id received');
	}	
	
          $del = "DELETE FROM cart WHERE pid ='".mysql_real_escape_string($id)."' AND username ='".mysql_real_escape_string($username)."' AND qty ='".mysql_real_escape_string($qty)."' ";
          $get = mysql_query($del);
?>
