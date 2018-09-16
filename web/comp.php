<div id="content">
			<!-- Products -->
			<div class="products">
				<a href="#"><h3>Combo Offers</h3></a><a href="#"><span class="details">View More Details >></span></a>

				<ul>

<?php

     $get2=mysql_query('SELECT *  FROM products_details WHERE  (sub_cat_id >= "21" AND sub_cat_id <= "27" AND details = "combo") ORDER BY pid DESC  LIMIT  5 ');
     while($rows2=mysql_fetch_assoc($get2))
     {  $pid= $rows2['pid'];
         $name= $rows2['name'];
         $image_product =$rows2['image_product'];
         $price =$rows2['price'];
         $current_price =$rows2['current_price'];
         $offer = $rows2['offer']; 
         $extra_details = $rows2['extra_details']; 
          if($price ==0)
           {
               echo'<li>
						<div class="product">
							<a href="purchase.php?pid='.$rows2['pid'] .'" class="info">
								<span class="holder">
									<img src="'.$rows2['image_product'].'
"	/>								<span class="book-name">'.$name.'</span>
									<span class="author">'.$current_price.'</span>
<span class="less">'.$extra_details.'</span> 										</span>
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
<span class="less">'.$offer .'%</span>	
<span class="less">'.$extra_details.'</span>																	</span>
							</a>
													</div>
					</li>';

             }

}


?>
</ul></div></div>

<?php
$str4 = "New Arrivals";
$str4 = base64_encode($str4);

echo'<div id="content">
			<!-- Products -->
			<div class="products">
				<a href="#"><h3>New Arrivals </h3></a><a href="view_more_new.php?catid=4&sub_cat1=21&sub_cat2=27&detail='.$str4.'"><span class="details">View More Details >></span></a>

	<ul>
';
?>
<?php

     $get2=mysql_query('SELECT *  FROM products_details WHERE  (sub_cat_id >= "21" AND sub_cat_id <= "27" ) ORDER BY pid DESC  LIMIT  5 ');
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
<?php
$str4 = "Exciting Offers";
$str4 = base64_encode($str4);

echo'<div id="content">
			<!-- Products -->
			<div class="products">
				<a href="#"><h3>Exciting Offers </h3></a><a href="view_more_ex.php?catid=4&sub_cat1=21&sub_cat2=27&detail='.$str4.'"><span class="details">View More Details >></span></a>

	<ul>
';
?>
<?php

     $get2=mysql_query('SELECT *  FROM products_details WHERE  (sub_cat_id >= "21" AND sub_cat_id <= "27" AND offer >10) ORDER BY pid DESC  LIMIT  5 ');
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


?>
</ul></div></div>

<?php
$str4 = "Recently sold";
$str4 = base64_encode($str4);

echo'<div id="content">
			<!-- Products -->
			<div class="products">
				<a href="#"><h3>Recently sold </h3></a><a href="view_more_recent.php?catid=4&detail='.$str4.'"><span class="details">View More Details >></span></a>

	<ul>
'; 
?>
<?php
$get=mysql_query('SELECT *  FROM items_sold  WHERE cat_id ="4"  ORDER BY pid DESC LIMIT  5 ');
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