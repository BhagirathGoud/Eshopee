
<?php include("config.php");
$cat_id = $_GET['cat_id'];
?>
<?php include ("header.php");?>
<?php include("navigation.php");?>

<div id ="left" >
<br/>
<?php

$get=mysql_query(' SELECT * FROM products_catag WHERE  cat_id = "'.$cat_id.'" ');
while($rows=mysql_fetch_assoc($get))
{   
    echo'<p><a href="index.php">Home</a> >> <a href="products.php?cat_id='.$cat_id.'"><span id="link">'.$rows['category'].'</span></a></p>';
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
<?php 
if($cat_id == "1")
{echo'<h1>Browse By Author</h1>';}
else
{echo'<h1>Browse By Brands</h1>';}
?>
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

<?php 
if($cat_id == "1" )
{
include("books.php");
}

elseif($cat_id == "2" )
{
include("elect.php");
}
elseif($cat_id == "3" )
{
include("mobiles.php");
}
elseif($cat_id == "4" )
{
include("comp.php");
}
elseif($cat_id == "5" )
{
include("cameras.php");
}
elseif($cat_id == "6" )
{
include("office.php");
}
elseif($cat_id == "7" )
{
include("gifts.php");
}
?>




</div>	  


</div>

			









<?php include("footer.php");?>