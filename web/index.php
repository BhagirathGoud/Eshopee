<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	
<title>Eshopee-Online shopping</title>	
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
<link rel="shortcut icon" href="css/images/favicon.ico" />
	
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />


<link rel="stylesheet" href="css/dropdown.css" type="text/css" media="screen"/>

<link rel="stylesheet" href="css/search.css" type="text/css" media="all" />

   
<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
	
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	
<!--[if IE 6]>
		
<script type="text/javascript" src="js/png-fix.js"></script>
	
<![endif]-->
	
<script type="text/javascript" src="js/functions.js"></script>

<?php include("config.php");?>
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
  
 $get2=mysql_query('SELECT SUM(qty) AS qty  FROM cart WHERE username ="'.$_SESSION['username'].'"  ');
  $result = mysql_fetch_assoc($get2);
  $sum = $result['qty'];
   echo'<a href="mycart.php" id="user">My Cart (';
  echo $sum;
echo')</a></p>';

}
else
{

echo'<a href="login.php" id="user">My Cart (Empty)</a>';

}
?>

</div>
		
<!-- End Login-details -->
	

</div>	
<!-- End Header -->
	













<br/><br/>	
<div class="rest">
<!-- Best-sellers -->
	
<?php		
echo'<div id="best-sellers">
			<h3>Best Deals </h3>
				<ul>
';	
?>	
<?php

     $get2=mysql_query('SELECT *  FROM products_details WHERE (offer >30)  ORDER BY pid DESC  LIMIT  8  ');
     while($rows2=mysql_fetch_assoc($get2))
     {   $pid= $rows2['pid'];
         $name= $rows2['name'];
         $image_product =$rows2['image_product'];
         $price =$rows2['price'];
         $current_price =$rows2['current_price'];
         $offer = $rows2['offer']; 	



		echo'<li>
						<div class="product">
							<a href="purchase.php?pid='.$rows2['pid'] .'">
								<img src="'.$rows2['image_product'].'" alt="" />
								<span class="book-name">'.$name.'</span>
																
<span class="author"><s>Rs.'.$price.'</s><span  class="abc">Rs.'.$current_price.'</span>
</span>
									<span class="price">'.$offer.'% Off</span>			</a>
						</div>
					</li>';


     }	
?>
</ul></div>				
<!-- End Best-sellers -->


<span>

<?php  include("navigation.php"); ?>

</span>
</div>		

<br/>


<!-- Main -->
		
<div id ="main" class="shell">

	  

<!-- Content 1-->
		
<?php
$str4 = "Related to Items You Recently purchased";
$str4 = base64_encode($str4);

echo'<div id="content">
			<!-- Products -->
			<div class="products">
				<a href="#"><h3>Related to Items You Recently purchased</h3></a><ul>
';
?>
<?php
$get=mysql_query('SELECT *  FROM items_sold  WHERE username="'.$username.'" ORDER BY transid DESC  LIMIT  1  ');
while($rows=mysql_fetch_assoc($get))
{
$get3=mysql_query('SELECT *  FROM products_sub_catag WHERE cat_id="'.$rows['cat_id'].'" ');
while($rows3=mysql_fetch_assoc($get3))
{
$pid = $rows['pid'];
     $get2=mysql_query('SELECT *  FROM products_details WHERE (sub_cat_id= "'.$rows3['subcat_id'].'" ) ORDER BY pid DESC  LIMIT  1  ');
     while($rows2=mysql_fetch_assoc($get2))
     {   $pid= $rows2['pid'];
         $name= $rows2['name'];
         $image_product =$rows2['image_product'];
         $price =$rows2['price'];
         $current_price =$rows2['current_price'];
         $offer = $rows2['offer']; 
          if($price ==0)
           {
               echo'<li>
						<div class="product">
							<a href="purchase.php?pid='.$rows2['pid'] .'" class="info">
								<span class="holder">
									<img src="'.$rows2['image_product'].'
"	/>								<span class="book-name">'.$name.'</span>
									<span class="author">'.$current_price.'</span>
										</span>
							</a>
													</div>
					</li>';

           }
          else
            {
               echo'<li>
						<div class="product">
							<a href="purchase.php?pid='.$rows2['pid'] .'" class="info">
								<span class="holder">
									<img src="'.$rows2['image_product'].'
"	/>								<span class="book-name">'.$name.'</span>
									<span class="author"><s>Rs.'.$price.'</s><span class="author">'.$current_price.'</span>
</span>
<span class="less">'.$offer .'%</span>																	</span>
							</a>
													</div>
					</li>';

             }

}
}
}
?>
</ul></div></div>	


	<!-- End Content1 -->
		<div class="cl">&nbsp;</div>


<!-- Content 5-->
		
<?php
$str4 = "Most Popular Items of this Week";
$str4 = base64_encode($str4);

echo'<div id="content">
			<!-- Products -->
			<div class="products">
				<a href="#"><h3>Most Popular Items of this Week </h3></a>

	<ul>
';
?>
<?php
$get=mysql_query('SELECT *  FROM cart ORDER BY id DESC LIMIT  6 ');
while($rows=mysql_fetch_assoc($get))
{
$pid = $rows['pid'];
     $get2=mysql_query('SELECT *  FROM products_details WHERE pid= "'.$pid.'" ');
     while($rows2=mysql_fetch_assoc($get2))
     {   $pid= $rows2['pid'];
         $name= $rows2['name'];
         $image_product =$rows2['image_product'];
         $price =$rows2['price'];
         $current_price =$rows2['current_price'];
         $offer = $rows2['offer']; 
          if($price ==0)
           {
               echo'<li>
						<div class="product">
							<a href="purchase.php?pid='.$rows2['pid'] .'" class="info">
								<span class="holder">
									<img src="'.$rows2['image_product'].'
"	/>								<span class="book-name">'.$name.'</span>
									<span class="author">'.$current_price.'</span>
										</span>
							</a>
													</div>
					</li>';

           }
          else
            {
               echo'<li>
						<div class="product">
							<a href="purchase.php?pid='.$rows2['pid'] .'" class="info">
								<span class="holder">
									<img src="'.$rows2['image_product'].'
"	/>								<span class="book-name">'.$name.'</span>
									<span class="author"><s>Rs.'.$price.'</s><span class="author">'.$current_price.'</span>
</span>
<span class="less">'.$offer .'%</span>																	</span>
							</a>
													</div>
					</li>';

             }

}
}

?>
</ul></div></div>	

	<!-- End Content5-->







<!-- Content 2-->
	
<?php
$str4 = "HeadPhones-Best Sellers ";
$str4 = base64_encode($str4);

echo'<div id="content">
			<!-- Products -->
			<div class="products">
				<a href="#"><h3>HeadPhones-Best Sellers </h3></a><ul>
';
?>
<?php
$get=mysql_query('SELECT *  FROM items_sold  WHERE cat_id ="3"  ORDER BY pid DESC ');
while($rows=mysql_fetch_assoc($get))
{
$get2=mysql_query('SELECT *  FROM products_details WHERE sub_cat_id= "19"  AND pid="'.$rows['pid'].'" LIMIT  6 ');
     while($rows2=mysql_fetch_assoc($get2))
     {   $pid= $rows2['pid'];
         $name= $rows2['name'];
         $image_product =$rows2['image_product'];
         $price =$rows2['price'];
         $current_price =$rows2['current_price'];
         $offer = $rows2['offer']; 
          if($price ==0)
           {
               echo'<li>
						<div class="product">
							<a href="purchase.php?pid='.$rows2['pid'] .'" class="info">
								<span class="holder">
									<img src="'.$rows2['image_product'].'
"	/>								<span class="book-name">'.$name.'</span>
									<span class="author">'.$current_price.'</span>
										</span>
							</a>
													</div>
					</li>';

           }
          else
            {
               echo'<li>
						<div class="product">
							<a href="purchase.php?pid='.$rows2['pid'] .'" class="info">
								<span class="holder">
									<img src="'.$rows2['image_product'].'
"	/>								<span class="book-name">'.$name.'</span>
									<span class="author"><s>Rs.'.$price.'</s><span class="author">'.$current_price.'</span>
</span>
<span class="less">'.$offer .'%</span>																	</span>
							</a>
													</div>
					</li>';

             }

}
}

?>
</ul></div></div>	
<!-- End Content2 -->
		<div class="cl">&nbsp;</div>
<!-- Content3 -->

<!-- Content 4-->
	
<?php
$str4 = "New in Books";
$str4 = base64_encode($str4);

echo'<div id="content">
			<!-- Products -->
			<div class="products">
				<a href="#"><h3>New in Books</h3></a><a href="view_more_new.php?catid=1&sub_cat1=1&sub_cat2=7&detail='.$str4.'"><span class="details">View More Details >></span></a>

	<ul>
';
?>
<?php

     $get2=mysql_query('SELECT *  FROM products_details WHERE  (sub_cat_id >= "1" AND sub_cat_id <= "7" ) ORDER BY pid DESC  LIMIT  6 ');
     while($rows2=mysql_fetch_assoc($get2))
     {  $pid= $rows2['pid'];
         $name= $rows2['name'];
         $image_product =$rows2['image_product'];
         $price =$rows2['price'];
         $current_price =$rows2['current_price'];
         $offer = $rows2['offer']; 
          if($price ==0)
           {
               echo'<li>
						<div class="product">
							<a href="purchase.php?pid='.$rows2['pid'] .'" class="info">
								<span class="holder">
									<img src="'.$rows2['image_product'].'
"	/>								<span class="book-name">'.$name.'</span>
									<span class="author">'.$current_price.'</span>
										</span>
							</a>
													</div>
					</li>';

           }
          else
            {
               echo'<li>
						<div class="product">
							<a href="purchase.php?pid='.$rows2['pid'] .'" class="info">
								<span class="holder">
									<img src="'.$rows2['image_product'].'
"	/>								<span class="book-name">'.$name.'</span>
									<span class="author"><s>Rs.'.$price.'</s><span class="author">'.$current_price.'</span>
</span>
<span class="less">'.$offer .'%</span>																	</span>
							</a>
													</div>
					</li>';

             }

}


?>
</ul></div></div>
		
<!-- End Content3 -->
		<div class="cl">&nbsp;</div>


<!-- Content 4-->
	
<?php
$str4 = "New Gadgets in Store";
$str4 = base64_encode($str4);

echo'<div id="content">
			<!-- Products -->
			<div class="products">
				<a href="#"><h3>New Gadgets in Store</h3></a><a href="view_more_new.php?catid=3&sub_cat1=12&sub_cat2=23&detail='.$str4.'"><span class="details">View More Details >></span></a>

	<ul>
';
?>
<?php

     $get2=mysql_query('SELECT *  FROM products_details WHERE  (sub_cat_id >= "12" AND sub_cat_id <= "23" ) ORDER BY pid DESC  LIMIT  6 ');
     while($rows2=mysql_fetch_assoc($get2))
     {  $pid= $rows2['pid'];
         $name= $rows2['name'];
         $image_product =$rows2['image_product'];
         $price =$rows2['price'];
         $current_price =$rows2['current_price'];
         $offer = $rows2['offer']; 
          if($price == 0)
           {
               echo'<li>
						<div class="product">
							<a href="purchase.php?pid='.$rows2['pid'] .'" class="info">
								<span class="holder">
									<img src="'.$rows2['image_product'].'
"	/>								<span class="book-name">'.$name.'</span>
									<span class="author">'.$current_price.'</span>
										</span>
							</a>
													</div>
					</li>';

           }
          else
            {
               echo'<li>
						<div class="product">
							<a href="purchase.php?pid='.$rows2['pid'] .'" class="info">
								<span class="holder">
									<img src="'.$rows2['image_product'].'
"	/>								<span class="book-name">'.$name.'</span>
									<span class="author"><s>Rs.'.$price.'</s><span class="author">'.$current_price.'</span>
</span>
<span class="less">'.$offer .'%</span>																	</span>
							</a>
													</div>
					</li>';

             }

}


?>
</ul></div></div>









	
<!-- End Content4 -->
		<div class="cl">&nbsp;</div>
		<div class="cl">&nbsp;</div>


<div id="rightcol">
<a href="#"><img src="css/images/offer3.jpg"/></a>
<a href="#"><img src="css/images/offer1.jpg"/></a>
<a href="#"><img src="css/images/offer2.png"/></a>
<a href="#"><img src="css/images/adv1.jpg"/></a>
<a href="#"><img src="css/images/offer4.gif"/></a>
</div>
<div id="rightcol2">
<div class="rightbest">
<h1>Combo packs</h1>
<?php
$get=mysql_query('SELECT *  FROM products_details WHERE  details="combo"  ORDER BY pid DESC LIMIT  4 ');
while($rows=mysql_fetch_assoc($get))
{ 
         $pid= $rows['pid'];
         $name= $rows['name'];
         $image_product =$rows['image_product'];
         $price =$rows['price'];
         $current_price =$rows['current_price'];
         $offer = $rows['offer']; 
         $details = $rows['details']; 
         $extra_details = $rows['extra_details']; 
if($price== 0)
{
echo'<a href="purchase.php?pid='.$rows['pid'] .'"><div class="box"><image src="'.$rows['image_product'].'"/><div class="name">'.$name.'</div></a> <div class="cost">Rs.'.$current_price.'</div><div class="off">'.$extra_details.'</div></div><br/><br/><br/>';
}
else
{
echo'<a href="purchase.php?pid='.$rows['pid'] .'"><div class="box"><image src="'.$rows['image_product'].'"/><div class="name">'.$name.'</div></a> 
<div class="cost"><strike>Rs.'.$price.'</strike></div><div class="cost">Rs.'.$current_price.'</div><div class="off">'.$offer.'% off</div></div><br/><br/><br/>';
}

}	
?>						
</div>
</div>

<?php include("footer.php"); ?>
</div>
	<!-- End Main -->



