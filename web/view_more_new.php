<?php include("config.php");
$cat_id= $_GET['catid'];
$sub_cat1= $_GET['sub_cat1'];
$sub_cat2= $_GET['sub_cat2'];
$str = base64_decode($_GET['detail']);
?>
<?php include ("header.php");?>


<?php include("navigation.php");?>


<div id="main" style="margin-top:0px;margin-left:0px;width:1347px;height:auto;padding-bottom:100px;">
<div id="slider">
<?php
$get=mysql_query(' SELECT * FROM products_catag WHERE  cat_id= "'.$cat_id.'" ');
while($rows=mysql_fetch_assoc($get))
{   
echo'<p style="padding-top:50px;padding-left:20px;"><a href="index.php"><span id="link">Home</span></a> >> <a href="products.php?cat_id='.$cat_id.'"><span id="link">'.$rows['category'].'</span></a>';

}   


?>
</div>
<br/><br/>
<div id="remain">

<?php echo'<h1 style="font-size:18px;">'.$str.'</h1>';?>
<div id="content">
			<!-- Products -->
			<div class="products">

								<ul>

<?php
    $get2=mysql_query('SELECT *  FROM products_details WHERE  (sub_cat_id >= "'.$sub_cat1.'" AND sub_cat_id <= "'.$sub_cat2.'" ) ORDER BY pid DESC  ');
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


</div>
</div>
<?php include("footer.php");?>

	
</html>
