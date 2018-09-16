<?php
session_start();
include("config.php");
date_default_timezone_set('Africa/Nairobi');
$date = date('Y-m-d');
$time = date('Y-m-d H:i:s');
if(isset($_SESSION['username']))
{
$username = $_SESSION['username'];
	$pid = intval($_GET['pid']);
                  $qty2 = intval($_GET['qty2']);
$get=mysql_query('SELECT *  FROM products_details WHERE pid ="'.$pid.'"   ');
while($rows=mysql_fetch_assoc($get))
{
 $get2=mysql_query('SELECT *  FROM products_sub_catag WHERE subcat_id="'.$rows['sub_cat_id'].'"   ');
while($rows2=mysql_fetch_assoc($get2))
{
 $cat_id = $rows2['cat_id'];

}
}

              if(!$pid && !$qty2)
	{
		die("failed");
	}	
                 $add = "insert  into `items_sold` values(NULL,'$username','$pid','$cat_id','$qty2')";
	$add2 = mysql_query("$add");
                    $get2=mysql_query('SELECT *  FROM items_sold WHERE username="'.$username.'" AND pid= "'.$pid.'" AND qty="'.$qty2.'" ');
     while($rows2=mysql_fetch_assoc($get2))                  
                   {$transid = $rows2['transid'];
                    $del ="Cash on Delivery";
                    $status="Processing..";
                     $emp = 0;
                  $add3 = "insert  into `purchase_details` values('$transid','$username','$emp','$date','$time','$del','$status')";
	$add4 = mysql_query("$add3");
	die("success");
                  header("Location:myAccount.php");
	
                  }
}
else
{
die("failed");


}
?>
