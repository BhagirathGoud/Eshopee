<html>
<head>
	
<title>Eshopee-Online shopping</title>	
	
<link rel="shortcut icon" href="css/images/favicon.ico" />
	
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />


<link rel="stylesheet" href="css/dropdown2.css" type="text/css" media="screen"/>

<link rel="stylesheet" href="css/search.css" type="text/css" media="all" />

<link rel="stylesheet" href="inc/css/main.css" type="text/css" media="all" />

<link rel="stylesheet" href="inc/css/zurb_buttons.css" type="text/css" media="all" />


   
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
	
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>

<script type="text/javascript" src="inc/js/main.js"></script>
		
<!--[if IE 6]>
		
<script type="text/javascript" src="js/png-fix.js"></script>
	
<![endif]-->
	
<script type="text/javascript" src="js/functions.js"></script>

</head>




<body>
	
<!-- Header -->
	
<div id="header" class="shell">
		
<div id="logo"><h1><a href="index.php"></a></h1>

</div>
				
<div class="cl">&nbsp;
</div>



		
<!-- Login-details -->
		
<div id="login-details">
			
<p>Welcome,
<?php
                    session_start();

	if(isset($_SESSION['username']))
		{$username = $_SESSION['username'];
                                  echo $username;}
	else
		{$username = 'New User';
                                   echo $username;}
?>





 </p><p>|</p><p>

<?php if(isset($_SESSION['username']))
{echo'<a href="myAccount.php" id="user">My Account</a></p><p>|</p>';}
else
{echo'<a href="login.php" id="user">My Account</a></p><p>|</p>';}

?>


<p><a href="#" id="user">Help</a></p>
<p>|</p>
<?php if(isset($_SESSION['username']))
{ echo'<p><a href="logout.php" id="user">Logout</a></p>';}
else
{echo'<p><a href="login.php" id="user">Login</a></p><p>|</p><p><a href="reg.php" id="user">Signup</a></p>

';} ?>

<p class="carting"><a href="#" id="user" ><img src="css/images/cart-icon.png" alt="" /></a>
<?php    
include("config.php");

	if(isset($_SESSION['username']))
{   
   echo'<a href="mycart.php" id="user">My Cart (';
 $get2=mysql_query('SELECT SUM(qty) AS qty  FROM cart WHERE username ="'.$_SESSION['username'].'"  ');
  $result = mysql_fetch_assoc($get2);
  $sum = $result['qty'];
  echo $sum;
echo')</a></p>';

}
else
{

echo'<a href="#" id="user">My Cart (Empty)</a>';

}
?>








</div>
		
<!-- End Login-details -->
	

</div>	
<!-- End Header -->
	
