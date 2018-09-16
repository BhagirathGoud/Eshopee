<?php
$str4 = "Exciting Offers";
$str4 = base64_encode($str4);

echo'<div id="content">
			<!-- Products -->
			<div class="products">
				<a href="#"><h3>Exciting Offers </h3></a><a href="view_more_ex.php?catid=2&sub_cat1=9&sub_cat2=13&detail='.$str4.'"><span class="details">View More Details >></span></a>

	<ul>
';
?>
<?php

     $get2=mysql_query('SELECT *  FROM products_details WHERE  (sub_cat_id >= "9" AND sub_cat_id <= "13" AND offer >10) ORDER BY pid DESC  LIMIT  5 ');
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
$str3 = "LCD/LED,DVD Players...";
$str3 = base64_encode($str3);


echo'<div id="content">
			<!-- Products -->
			<div class="products">
				<a href="#"><h3>LCD/LED,DVD Players... </h3></a><a href="view_more.php?catid=2&sub_cat1=12&sub_cat2=13&detail='.$str3.'"><span class="details">View More Details >></span></a>

				<ul>';

?>
<?php

     $get2=mysql_query('SELECT *  FROM products_details WHERE  (sub_cat_id= "12" OR sub_cat_id ="13")  ORDER BY pid DESC  LIMIT  5 ');
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
$str2 = "ipods & MP3 Players";
$str2 = base64_encode($str2);

echo'<div id="content">
			<!-- Products -->
			<div class="products">
				<a href="#"><h3>ipods & MP3 Players</h3></a><a href="view_more.php?catid=2&sub_cat1=10&sub_cat2=0&detail='.$str2.'"><span class="details">View More Details >></span></a>

				<ul>
';
?>
<?php

     $get2=mysql_query('SELECT *  FROM products_details WHERE sub_cat_id= "10"  ORDER BY pid DESC LIMIT  5');
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
$str = "Cables & Connectors ,Gaming Controllers &others..";
$str = base64_encode($str);

echo'<div id="content">
			<!-- Products -->
			<div class="products">
				<a href="#"><h3>Cables & Connectors ,Gaming Controllers &others.. </h3></a><a href="view_more.php?catid=2&sub_cat1=9&sub_cat2=11&detail='.$str.'"><span class="details">View More Details >></span></a>				<ul>
';
?>
<?php

     $get2=mysql_query('SELECT *  FROM products_details WHERE  (sub_cat_id= "11" )  ORDER BY pid DESC LIMIT  5 ');
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
				<a href="#"><h3>Recently sold </h3></a><a href="view_more_recent.php?catid=2&detail='.$str4.'"><span class="details">View More Details >></span></a>

	<ul>
';
?>
<?php
$get=mysql_query('SELECT *  FROM items_sold  WHERE cat_id ="2"  ORDER BY pid DESC LIMIT  5 ');
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
