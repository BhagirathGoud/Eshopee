<?php

include_once 'inc/php/config.php';

include_once 'inc/php/functions.php';

?>



<?php include("header.php"); ?>
<div id="main" style="margin-top:0px;margin-left:0px;width:1347px;height:auto;padding-bottom:100px;">

<br/><br/>
<br/><br/>
<div id="remain">
<?php

//setup some variables

$action = array();

$action['result'] = null;


	
if(empty($_GET['email']) || empty($_GET['key']))
{
	
$action['result'] = 'error';
	
$action['text'] = 'We are missing variables. Please double check your email.';			

}
		

if($action['result'] != 'error'){

	
	
$email = mysql_real_escape_string($_GET['email']);
	
$key = mysql_real_escape_string($_GET['key']);
	
	
	
$check_key = mysql_query("SELECT * FROM `confirm` WHERE `email` = '$email' AND `key` = '$key' LIMIT 1") or die(mysql_error());
	
	
if(mysql_num_rows($check_key) != 0){
				
				$confirm_info = mysql_fetch_assoc($check_key);
		
		
$update_users = mysql_query("UPDATE `users` SET `active` = 1 WHERE `id` = '$confirm_info[userid]' LIMIT 1") or die(mysql_error());
		
$delete = mysql_query("DELETE FROM `confirm` WHERE `id` = '$confirm_info[id]' LIMIT 1") or die(mysql_error());
		
if($update_users){
						
			
$action['result'] = 'success';
			$action['text'] = 'User has been confirmed. Thank-You!';
		
		
}
else{

			$action['result'] = 'error';
			
$action['text'] = 'The user could not be updated Reason: '.mysql_error();;
		
		
}
	
	
}
else{
	
		
$action['result'] = 'error';
		$action['text'] = 'The key and email is not in our database.';
	
	
}


}



?>


<?= 
show_errors($action); ?>



</div>
</div>
<?php 
include("footer.php"); ?>