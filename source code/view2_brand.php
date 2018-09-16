
<?php include("config.php");
$brandy= $_GET['brandy'];
$sub =  $_GET['sub'];
?>
<?php include ("header.php");?>
	

<?php include("navigation.php");?>


<div id ="left" >
<br/>
<?php

$get=mysql_query(' SELECT * FROM products_sub_catag WHERE subcat_id = "'.$sub.'" ');
while($rows=mysql_fetch_assoc($get))
{    
   $res = mysql_query(' SELECT * FROM products_catag WHERE cat_id = "'.$rows['cat_id'].'" ');
    while($rows2=mysql_fetch_assoc($res))
    {
 echo'<p><a href="index.php">Home </a> >> <a href="products.php?cat_id='.$rows['cat_id'].'"><span id="link">' .$rows2['category'].'</span></a> >> <a href="view.php?sub_cat='.$sub.'"><span id="link">' .$rows['subcategory'].'</span></a></p>';
    }
}

?>

<br/>
<br/>

<div id="left_top2">
<h1>Browse By Brands</h1>
<br/>
<?php


    $get2=mysql_query('SELECT DISTINCT  brand FROM products_details WHERE  sub_cat_id ="'.$sub.'" ');
     while($rows2=mysql_fetch_assoc($get2))
     {
       $brand = $rows2['brand'];
       echo '<a href="view2_brand.php?brandy='.$brand.'&sub='.$sub.'"><p>'.$brand.'</p></a>';
      }


?>
<br/>
<br/>
</div>
<br/><br/>



</div>



<div id="main">
<div id="slider">
</div>
<br/><br/>
<div id="remain">

<div id="content">
			<!-- Products -->
			<div class="products">

<?php
$res =  mysql_query('SELECT *  FROM products_sub_catag WHERE  subcat_id = "'.$sub.'" ');
  while($rows4=mysql_fetch_assoc($res))
 $name = $rows4['subcategory'];
?>				
<a href="#"><h3><?php echo $brandy ?></h3></a>		<ul>

<?php
 

     $get2=mysql_query('SELECT *  FROM products_details WHERE  sub_cat_id = "'.$sub.'" AND brand="'.$brandy.'" ');
     while($rows2=mysql_fetch_assoc($get2))
     {    $pid= $rows2['pid'];
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



</div>	  


</div>

			

<?php include("footer.php");?>







