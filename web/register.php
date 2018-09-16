





<!-- Main -->
		
<div id ="main" class="shell">

<?php

 include_once 'inc/php/config.php';

include_once 'inc/php/functions.php';

//setup some variables/arrays

$action = array();

$action['result'] = null;


$text = array();

//check if the form has been submitted

if(isset($_POST['signup'])){

	
$firstname = mysql_real_escape_string($_POST['firstname']);

$lastname = mysql_real_escape_string($_POST['lastname']);

$email = mysql_real_escape_string($_POST['email']);

$contact= mysql_real_escape_string($_POST['contact']);
	
$username = mysql_real_escape_string($_POST['username']);
	
$password = mysql_real_escape_string($_POST['password']);
	

if(empty($username)){ $action['result'] = 'error'; 
array_push($text,'You forgot your username'); }
	
if(empty($password)){ $action['result'] = 'error';
 array_push($text,'You forgot your password'); }
	
if(empty($email)){ $action['result'] = 'error'; array_push($text,'You forgot your email'); }
	
	if($action['result'] != 'error'){
				
		
$password = md5($password);	
			
			
$add = mysql_query("INSERT INTO `users` VALUES(firstname,lastname,NULL,'$username','$password','$email',contact,0)");
		
		
if($add){
			
						$userid = mysql_insert_id();
			
						
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
								
										
$action['result'] = 'success';
					
array_push($text,'Thanks for signing up. Please check your email for confirmation!');
				
				}
else{
					
					$action['result'] = 'error';
					
array_push($text,'Could not send confirm email');
				
				}
			
			
}
else{
				
				
$action['result'] = 'error';
				
array_push($text,'Confirm row was not added to the database. Reason: ' . mysql_error());
				
			}
			
		}
else{
		
			
$action['result'] = 'error';
			
array_push($text,'User could not be added to the database. Reason: ' . mysql_error());
		
		}
	
	}
	
	$action['text'] = $text;

}

?>



<?php
include 'inc/elements/header.php'; ?>


<?= show_errors($action); ?>


<form method="post" action="">

    <fieldset>
    
   <ul> 	<li>
    			<label for="firstname">First name:</label>
    			<input type="text" name="firstname" />
    		</li>
    
<li>
    			<label for="lastname">Last name:</label>
    			<input type="text" name="lastname" />
    		</li>
 
<li>
    			<label for="email">Email:</label>
    			<input type="text" name="email" />	
    		</li>
  <li>
    			<label for="contact">Contact Number:</label>
    			<input type="text" name="contact" />
    		</li>
     	   		  		<li>
    			<label for="username">Username:</label>
    			<input type="text" name="username" />
    		</li>
    		<li>
    			<label for="password">Password:</label>
    			<input type="password" name="password" />
    		</li>
    			<li>
    			<input type="submit" value="Signup Now" class="large blue button" name="signup" />			
    		</li>
    	</ul>
    	
    </fieldset>
    
</form>			
		
<?php
include 'inc/elements/footer.php'; ?>






</div>



	
<!-- End Main -->
















 


