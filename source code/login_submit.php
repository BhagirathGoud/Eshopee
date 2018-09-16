<?php
session_start();
	
include("config.php");
$username = $_POST['username'];
$pass = $_POST['password'];

	
$query2 = 'select password from users_details WHERE username="'.$username.'" ';

$res2 = mysql_query($query2);
if(!$res2)
	{
die('No such username..'. mysql_error()); 

}
$row2 = mysql_fetch_assoc($res2);
	
if($pass == $row2['password'])
	
{
		
$query = 'select *  from users_details WHERE username="'.$username.'"  AND password ="'.$pass.'" ';
	
$res = mysql_query($query);
	
if(!$res)
	{
		
die('Account Not Activated...'. mysql_error());	
}


$row = mysql_fetch_assoc($res);
	
if($row['active'] == "1")	
{
$_SESSION['username'] = $row['username'];
		
$_SESSION['loggedin'] = "true";
	
header("Location:index.php");
	
}

else
{	
header("Location:login.php?error=2");

}



	
}



else
	
{
				
header("Location:login.php?error=1");
	
}





?>

