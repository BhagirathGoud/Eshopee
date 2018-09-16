<!--Navigation-->
<?php include("config.php"); ?>
<div id="navigation">
   			
                                              <ul id="ldd_menu" class="ldd_menu">
				<li>
					<span><a href="products.php?cat_id=1">Books</a></span>
					<div class="ldd_submenu">
						
						<ul>
							<li class="ldd_heading"> Categories</li>
							<li><a href="view.php?sub_cat=1">Arts</a></li>
							<li><a href="view.php?sub_cat=2">Comics</a></li>
							<li><a href="view.php?sub_cat=4">Computers & Tech</a></li>
							<li><a href="view.php?sub_cat=5">Sports</a></li>
							<li><a href="view.php?sub_cat=6">Music & Movies</a></li>
							<li><a href="view.php?sub_cat=7">Novels</a></li>
						</ul>
						<ul><li class="ldd_heading">Featured Authors</li>
<?php

$get=mysql_query('SELECT *  FROM products_sub_catag WHERE  cat_id = "1" ');
while($rows=mysql_fetch_assoc($get))
{
$subcat_id = $rows['subcat_id'];
    $get2=mysql_query('SELECT DISTINCT  brand FROM products_details WHERE  sub_cat_id ="'.$subcat_id.'" ');
     while($rows2=mysql_fetch_assoc($get2))
     {
       $brand = $rows2['brand'];
       echo '<li><a href="view_brand.php?brand='.$rows2['brand'].'&cat_id='.$rows['cat_id'].'">'.$brand.'</a></li>';
      }

}
?>
</ul>
</div>
				</li>
				<li>
					<span><a href="products.php?cat_id=2">Electronics</a></span>
					<div class="ldd_submenu">
						
						<ul>
							<li class="ldd_heading"> Categories</li>
				
							<li><a href="view.php?sub_cat=9">Gaming Controllers</a></li>
							<li><a href="view.php?sub_cat=10">ipods & MP3 players</a></li>
							<li><a href="view.php?sub_cat=11">Cables & connectors</a></li>
							<li><a href="view.php?sub_cat=12">DVD players</a></li>
							<li><a href="view.php?sub_cat=13">LCD/LED TVs</a></li>
						</ul>
						<ul>
							<li class="ldd_heading">Featured Brands</li>
<?php

$get=mysql_query('SELECT *  FROM products_sub_catag WHERE  cat_id = "2" ');
while($rows=mysql_fetch_assoc($get))
{
$subcat_id = $rows['subcat_id'];
    $get2=mysql_query('SELECT DISTINCT  brand FROM products_details WHERE  sub_cat_id ="'.$subcat_id.'" ');
     while($rows2=mysql_fetch_assoc($get2))
     {
       $brand = $rows2['brand'];
       echo '<li><a href="view_brand.php?brand='.$rows2['brand'].'&cat_id='.$rows['cat_id'].'">'.$brand.'</a></li>';
      }

}
?>
							
						</ul>
						
					</div>
				</li>
				<li>
					<span><a href="products.php?cat_id=3">Mobiles</a></span>
					<div class="ldd_submenu">
						
						<ul>
							<li class="ldd_heading"> Categories</li>
							<li><a href="view.php?sub_cat=14">Mobile Phones</a></li>
							<li><a href="view.php?sub_cat=15">Mobile Accessories</a></li>
							<li><a href="view.php?sub_cat=16">Mobile Chargers</a></li>
							<li><a href="view.php?sub_cat=17">Mobile Covers</a></li>
							<li><a href="view.php?sub_cat=18">Memory Cards</a></li>
							<li><a href="view.php?sub_cat=19">Head Phones &<br/>Headsets</a></li>
                                                                                                                           
						</ul>
						<ul>
							<li class="ldd_heading">Featured Brands</li>
							<?php

$get=mysql_query('SELECT *  FROM products_sub_catag WHERE  cat_id = "3" ');
while($rows=mysql_fetch_assoc($get))
{
$subcat_id = $rows['subcat_id'];
    $get2=mysql_query('SELECT DISTINCT  brand FROM products_details WHERE  sub_cat_id ="'.$subcat_id.'" ');
     while($rows2=mysql_fetch_assoc($get2))
     {
       $brand = $rows2['brand'];
       echo '<li><a href="view_brand.php?brand='.$rows2['brand'].'&cat_id='.$rows['cat_id'].'">'.$brand.'</a></li>';
      }

}
?>
						</ul>
						
					</div>
				</li>
                                                                      <li>
					<span><a href="products.php?cat_id=4">Computers</a></span>
					<div class="ldd_submenu">
						
						<ul>
							<li class="ldd_heading"> Categories</li>
							<li><a href="view.php?sub_cat=21">Computer peripherals</a></li>
							<li><a href="view.php?sub_cat=22">Laptops </a></li>
							<li><a href="view.php?sub_cat=23">ipads &Tablets</a></li>
							<li><a href="view.php?sub_cat=24">Pendrives</a></li>
							<li><a href="view.php?sub_cat=25">Speakers</a></li>
							<li><a href="view.php?sub_cat=26">Webcam</a></li>
                                                                                                                         <li><a href="view.php?sub_cat=27">Keyboard & mouse</a></li>
						</ul>
						<ul>
							<li class="ldd_heading">Featured Brands</li>
							<?php

$get=mysql_query('SELECT *  FROM products_sub_catag WHERE  cat_id = "4" ');
while($rows=mysql_fetch_assoc($get))
{
$subcat_id = $rows['subcat_id'];
    $get2=mysql_query('SELECT DISTINCT  brand FROM products_details WHERE  sub_cat_id ="'.$subcat_id.'" ');
     while($rows2=mysql_fetch_assoc($get2))
     {
       $brand = $rows2['brand'];
       echo '<li><a href="view_brand.php?brand='.$rows2['brand'].'&cat_id='.$rows['cat_id'].'">'.$brand.'</a></li>';
      }

}
?>
						</ul>
						
					</div>
				</li>
                                                                        <li>
					<span><a href="products.php?cat_id=5">Cameras</a></span>
					<div class="ldd_submenu">
						
						<ul>
							<li class="ldd_heading"> Categories</li>
							<li><a href="view.php?sub_cat=28">Digital Cameras</a></li>
							<li><a href="view.php?sub_cat=29">Lens </a></li>
							<li><a href="view.php?sub_cat=30">Digital SLRs</a></li>
							<li><a href="view.php?sub_cat=31">Tripods</a></li>
							<li><a href="view.php?sub_cat=32">Memory Cards</a></li>
							<li><a href="view.php?sub_cat=33">Cases & Bags</a></li>
                                                                                                                         <li><a href="view.php?sub_cat=34">Binoculars</a></li>
						</ul>
						<ul>
							<li class="ldd_heading">Featured Brands</li>
							<?php

$get=mysql_query('SELECT *  FROM products_sub_catag WHERE  cat_id = "5" ');
while($rows=mysql_fetch_assoc($get))
{
$subcat_id = $rows['subcat_id'];
    $get2=mysql_query('SELECT DISTINCT  brand FROM products_details WHERE  sub_cat_id ="'.$subcat_id.'" ');
     while($rows2=mysql_fetch_assoc($get2))
     {
       $brand = $rows2['brand'];
       echo '<li><a href="view_brand.php?brand='.$rows2['brand'].'&cat_id='.$rows['cat_id'].'">'.$brand.'</a></li>';
      }

}
?>
						</ul>
						
					</div>
				</li>
                                                                                     <li>
					<span><a href="products.php?cat_id=6">Office & Stationery</a></span>
					<div class="ldd_submenu">
						
						<ul>
							<li class="ldd_heading"> Categories</li>
							<li><a href="view.php?sub_cat=35">Pens & Pencils</a></li>
							<li><a href="view.php?sub_cat=36">Markers</a></li>
							<li><a href="view.php?sub_cat=37">Highlighters</a></li>
							<li><a href="view.php?sub_cat=38">Calculators</a></li>
							<li><a href="view.php?sub_cat=39">Diaries</a></li>
							<li><a href="view.php?sub_cat=40">Files & Folders</a></li>
                                                                                                                         <li><a href="view.php?sub_cat=41">Art Supplies</a></li>
						</ul>
						<ul>
							<li class="ldd_heading">Featured Brands</li>
							<?php

$get=mysql_query('SELECT *  FROM products_sub_catag WHERE  cat_id = "6" ');
while($rows=mysql_fetch_assoc($get))
{
$subcat_id = $rows['subcat_id'];
    $get2=mysql_query('SELECT DISTINCT  brand FROM products_details WHERE  sub_cat_id ="'.$subcat_id.'" ');
     while($rows2=mysql_fetch_assoc($get2))
     {
       $brand = $rows2['brand'];
       echo '<li><a href="view_brand.php?brand='.$rows2['brand'].'&cat_id='.$rows['cat_id'].'">'.$brand.'</a></li>';
      }

}
?>
						</ul>
						
					</div>
				</li>
                                                                                         <li>
					<span><a href="products.php?cat_id=7">Gifts</a></span>
					<div class="ldd_submenu">
						
						<ul>
							<li class="ldd_heading"> Categories</li>
							<li><a href="view.php?sub_cat=42">Cakes & Chocolates</a></li>
							<li><a href="view.php?sub_cat=43">Sweets & Dry Fruits</a></li>
							<li><a href="view.php?sub_cat=44">Festivals</a></li>
                                                                                                                          <li><a href="view.php?sub_cat=45">Tea Mugs</a></li>
							
						</ul>
						<ul>
							<?php

$get=mysql_query('SELECT *  FROM products_sub_catag WHERE  cat_id = "7" ');
while($rows=mysql_fetch_assoc($get))
{
$subcat_id = $rows['subcat_id'];
    $get2=mysql_query('SELECT DISTINCT  brand FROM products_details WHERE  sub_cat_id ="'.$subcat_id.'" ');
     while($rows2=mysql_fetch_assoc($get2))
     {
       $brand = $rows2['brand'];
       echo '<li><a href="view_brand.php?brand='.$rows2['brand'].'&cat_id='.$rows['cat_id'].'">'.$brand.'</a></li>';
      }

}
?>
							
						</ul>
						
					</div>
				</li>
			</ul>

<span>
                <form id="ui_element" class="sb_wrapper">
                    <p>
						<span class="sb_down"></span>
						<input class="sb_input" type="text" value="Search for item"/>
						<input class="sb_search" type="submit" value=""/>
					</p>
					<ul class="sb_dropdown" style="display:none;">
						<li class="sb_filter">Filter your search</li>
						<li><input type="checkbox"/><label for="all"><strong>All Categories</strong></label></li>
						<li><input type="checkbox"/><label for="Automotive">Books</label></li>
						<li><input type="checkbox"/><label for="Baby">Electronics</label></li>
						<li><input type="checkbox"/><label for="Beauty">Mobiles</label></li>
						<li><input type="checkbox"/><label for="Books">Computers</label></li>
						<li><input type="checkbox"/><label 
for="Cell">Cameras</label></li>
						<li><input type="checkbox"/><label 
for="Cloth">Office&Stationary</label></li>
						<li><input type="checkbox"/><label for="Electronics">Gifts</label></li>

					</ul>
                </form>
     










	</div>	
<!--End Navigation-->