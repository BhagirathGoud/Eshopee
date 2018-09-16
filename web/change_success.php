<?php include("config.php");?>
<?php
session_start();
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$pin = $_POST['pin'];

$sql = "UPDATE 
           users_details
        SET
           `home_address`=  '".$address."',
           `city` =  '".$city."',
           `state`=  '".$state."', 
           `country`= '".$country."',
           `pincode`=  '".$pin."'
        WHERE
           `username`= '".$_SESSION['username']."' ";
$update2 = mysql_query($sql); 
header("Location:change_address.php?suc=1");
	

?>