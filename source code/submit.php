<?php
include("config.php");
include_once 'inc/php/functions.php';



$firstname = mysql_real_escape_string($_POST['firstname']);
$lastname = mysql_real_escape_string($_POST['lastname']);
$address = mysql_real_escape_string($_POST['address']);
$city = mysql_real_escape_string($_POST['city']);
$state = mysql_real_escape_string($_POST['state']);
$country = mysql_real_escape_string($_POST['country']);
$pincode = mysql_real_escape_string($_POST['pincode']);
$contact = mysql_real_escape_string($_POST['contact']);
$email =mysql_real_escape_string( $_POST['email']);
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$submit = mysql_real_escape_string($_POST['submit']);


if(isset($submit))
{
$userid = md5($username);	
			
			
$add1 = "insert  into `users_details` values('$userid','$firstname','$lastname','$address','$city','$state','$pincode','$country','$contact','$email',
'$username','$password',0)";

$add = mysql_query($add1);	
if($add){
			
									
						
$key = $username . $email . date('mY');
			
$key = md5($key);
			
					
$confirm = mysql_query("INSERT INTO `confirm` VALUES(NULL,'$userid','$key','$email')");	
			
			
if($confirm){
			
				
include_once 'inc/php/swift/swift_required.php';
			
			
$info = array(
'username' => $username,
'email' => $email,
'key' => $key);
			
								
if(send_email($info)){
								
										
header("Location:reg.php?suc=1");
				
				}	
		

}}}
?>