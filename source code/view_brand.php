
<?php include("config.php");
$brand2 = $_GET['brand'];
$cat_id= $_GET['cat_id'];
?>
<?php include ("header.php");?>
<?php include("navigation.php");?>
<div id ="left" >
<br/>
<?php

$get=mysql_query(' SELECT * FROM products_catag WHERE  cat_id = "'.$cat_id.'" ');
while($rows=mysql_fetch_assoc($get))
{   
    echo'<p><a href="index.php">Home</a> >> <a href="products.php?cat_id='.$cat_id.'"><span id="link">'.$rows['category'].'</span></a> </p>';
}

?>
<br/>

<div id="left_top">
<h1>Browse By Categories</h1>
<br/>

<?php

$get=mysql_query('SELECT *  FROM products_sub_catag WHERE  cat_id = "'.$cat_id.'" ');
while($rows=mysql_fetch_assoc($get))
{
$subcat_id = $rows['subcat_id'];
$subcategory = $rows['subcategory'];
echo '<a href="view.php?sub_cat='.$subcat_id.'"><p>'.$subcategory.'</p></a>';
}
?>
<br/>
<br/>
</div>


<br/><br/>
<div id="left_top2">
<h1>Browse By Brands</h1>
<br/>
<?php

$get=mysql_query('SELECT *  FROM products_sub_catag WHERE  cat_id = "'.$cat_id.'" ');
while($rows=mysql_fetch_assoc($get))
{
$subcat_id = $rows['subcat_id'];
    $get2=mysql_query('SELECT DISTINCT  brand FROM products_details WHERE  sub_cat_id ="'.$subcat_id.'" ');
     while($rows2=mysql_fetch_assoc($get2))
     {
       $brand = $rows2['brand'];
       echo '<a href="view_brand.php?brand='.$rows2['brand'].'&cat_id='.$rows['cat_id'].'"><p>'.$brand.'</p></a>';
      }

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
				<a href="#"><h3><?php echo $brand2;?></h3></a>				<ul>

<?php
       $get = mysql_query('SELECT *  FROM products_sub_catag WHERE  cat_id="'.$cat_id.'" ');
   while($rows=mysql_fetch_assoc($get))
 {
     

     $get2=mysql_query('SELECT *  FROM products_details WHERE  (sub_cat_id = "'.$rows['subcat_id'].'" AND brand = "'.$brand2.'" )');
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




</div>	  


</div>

			









<?php include("footer.php");?>