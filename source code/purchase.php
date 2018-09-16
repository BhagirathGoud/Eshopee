<?php include ("header.php");?>
<?php include("navigation.php");
include("config.php");

$username = $_SESSION['username'];
?>

<?php $pid2 = $_GET['pid']; ?>
<head>

<script >


var xmlhttp;
function ajaxFunction(url,myReadyStateFunc)
{
   if (window.XMLHttpRequest)
   {
      // For IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
   }
   else
   {
      // For IE5, IE6
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
   xmlhttp.onreadystatechange= myReadyStateFunc;        // myReadyStateFunc = function
   xmlhttp.open("GET",url,true);
   xmlhttp.send();
}

function addCart(x)
{
    // in second argument of ajaxFunction we are passing whole function (onreadystatechange function).
	ipt =document.getElementsByName('qty')[0];
                  y = ipt.value;

    ajaxFunction("addCart.php?pid="+ x +"&qty="+ y, function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
           console.log(xmlhttp.responseText);
           if(xmlhttp.responseText == "success")  
               {
                  alert("added successfully");
                  location.href = "mycart.php";
   
                }
          else
            {
                  if(xmlhttp.responseText == "failed")  
               {
                  alert("please login for adding to cart!!!");  
                 location.href = "login.php";

                }
          }
        }
    });
}



function buyNow(x)
{
    // in second argument of ajaxFunction we are passing whole function (onreadystatechange function).
	ipt =document.getElementsByName('qty2')[0];
                  y = ipt.value;

    ajaxFunction("buyNow.php?pid="+ x +"&qty2="+ y, function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
           console.log(xmlhttp.responseText);
           if(xmlhttp.responseText == "success")  
               {
                  alert("Order has been Placed Successfully"); 
                  location.href = "myAccount.php";
 
                }
          else
            {
              if(xmlhttp.responseText == "failed")  
               {
                  alert("please login for Purchasing!!!");  
                 location.href = "login.php";

                }
            }
        }
    });
}






</script>
</head>



<div id="main" style="margin-top:0px;margin-left:0px;width:1347px;height:auto;padding-bottom:100px;">

<br/><br/>
<br/><br/>

<div id="remain">
<?php

$get=mysql_query(' SELECT * FROM products_details WHERE  pid= "'.$pid2.'" ');
while($rows=mysql_fetch_assoc($get))
{   
    $get2=mysql_query(' SELECT * FROM products_sub_catag WHERE  subcat_id= "'.$rows['sub_cat_id'].'" ');

    while($rows2=mysql_fetch_assoc($get2))
{ 


    $get3=mysql_query(' SELECT * FROM products_catag WHERE  cat_id= "'.$rows2['cat_id'].'" ');

    while($rows3=mysql_fetch_assoc($get3))
{ 

echo'<p><a href="index.php"><span id="link">Home</span></a> >> <a href="products.php?cat_id='.$rows2['cat_id'].'"><span id="link">'.$rows3['category'].'</span></a> >> <a href="view.php?sub_cat='.$rows['sub_cat_id'].'"><span id="link">'.$rows2['subcategory'].'</span></a></p>';


}

}

}

?>
<?php 
  $get= mysql_query('SELECT *  FROM products_details WHERE pid="'.$pid2.'"  ');
     while($rows2=mysql_fetch_assoc($get))
     {
         
      
         $name= $rows2['name'];
         $details = $rows2['details'];
         $details = $rows2['extra_details'];
         $image_product =$rows2['image_product'];
         $price =$rows2['price'];
         $current_price =$rows2['current_price'];
         $offer = $rows2['offer']; 
         echo'
<html>
<head>

<style type="text/css">
div#container
{
   width: 800px;
   height: 670px;
   margin-top: 0px;
   margin-left: 0px;
   text-align: left;
}
</style>
<style type="text/css">
body
{
   background-color: #FFFFFF;
   color: #000000;
}
</style>
<style type="text/css">
a:hover
{
   color: #000000;
}
</style>
</head>
<body>
<div id="container">
<div id="bv_Image1" style="margin:0;padding:0;position:absolute;left:20px;top:383px;width:352px;height:244px;text-align:left;z-index:0;">
<img src="'.$rows2['image_product'].'" align="top" border="0" style="width:352px;height:244px;"></div>
<div id="bv_Text1" style="margin:0;padding:0;position:absolute;left:455px;top:360px;width:767px;height:27px;text-align:left;z-index:1;">
<font style="font-size:24px" color="#000000" face="Arial">'.$name.'</font></div>
<div id="bv_Text2" style="margin:0;padding:0;position:absolute;left:457px;top:394px;width:770px;height:19px;text-align:left;z-index:2;">
<font style="font-size:17px" color="#000000" face="Arial"></font></div>
<hr noshade="false" id="Line1" style="color:#000000;background-color:#000000;border:0px;margin:0;padding:0;position:absolute;left:446px;top:417px;width:609px;height:1px;z-index:3">';


if($price != "0")
{
echo'<div id="bv_Text3" style="margin:0;padding:0;position:absolute;left:457px;top:445px;width:57px;height:19px;text-align:left;z-index:4;">
<font style="font-size:17px" color="#000000" face="Arial">Price:</font></div>
<div id="bv_Text4" style="margin:0;padding:0;position:absolute;left:591px;top:449px;width:67px;height:19px;text-align:left;z-index:5;">
<font style="font-size:17px" color="#000000" face="Arial">Rs.'.$current_price.'</font></div>
<div id="bv_Text5" style="margin:0;padding:0;position:absolute;left:515px;top:447px;width:59px;height:18px;text-align:left;z-index:6;">
<font style="font-size:16px" color="#000000" face="Arial"><s>Rs.'.$price.'</s></font></div>';

}
else
{
echo'<div id="bv_Text3" style="margin:0;padding:0;position:absolute;left:457px;top:445px;width:57px;height:19px;text-align:left;z-index:4;">
<font style="font-size:17px" color="#000000" face="Arial">Price:</font></div>
<div id="bv_Text4" style="margin:0;padding:0;position:absolute;left:591px;top:449px;width:67px;height:19px;text-align:left;z-index:5;">
<font style="font-size:16px" color="#000000" face="Arial">Rs.'.$current_price.'</font></div>';
}
echo'<input type="submit" id="Button1"  value="Buy It Now" 
onclick="javascript:buyNow('.$pid2 .')"
style="position:absolute;left:931px;top:434px;width:109px;height:31px;background-color:#6699FF;font-family:Arial;font-weight:bold;font-size:13px;z-index:7">
<hr noshade="false" id="Line2" style="color:#000000;background-color:#000000;border:0px;margin:0;padding:0;position:absolute;left:448px;top:515px;width:604px;height:1px;z-index:8">
<div id="bv_Text6" style="margin:0;padding:0;position:absolute;left:476px;top:533px;width:194px;height:16px;text-align:left;z-index:9;">
<font style="font-size:13px" color="#000000" face="Arial">Or Combine Multiple Purchases</font></div>

<input type="submit" id="Button2"  value="Add to Cart" 
onclick="javascript:addCart('.$pid2 .')"
style="position:absolute;left:933px;top:531px;width:107px;height:32px;background-color:#6699FF;font-family:Arial;font-weight:bold;font-size:13px;z-index:10">


<div id="bv_Text7" style="margin:0;padding:0;position:absolute;left:465px;top:605px;width:81px;height:19px;text-align:left;z-index:11;">
<font style="font-size:17px" color="#000000" face="Arial">Shipping:</font></div>
<div id="bv_Text8" style="margin:0;padding:0;position:absolute;left:553px;top:609px;width:150px;height:16px;text-align:left;z-index:12;">
<font style="font-size:13px" color="#000000" face="Arial">FREE</font></div>
<input type="text" id="Editbox1" style="position:absolute;left:843px;top:439px;width:69px;height:20px;border:1px #C0C0C0 solid;font-family:Courier New;font-size:16px;z-index:13" name="qty2" value="">
<div id="bv_Text9" style="margin:0;padding:0;position:absolute;left:806px;top:443px;width:33px;height:18px;text-align:left;z-index:14;">
<font style="font-size:16px" color="#000000" face="Arial">Qty:</font></div>
<input type="text" id="Editbox2" style="position:absolute;left:848px;top:533px;width:71px;height:20px;border:1px #C0C0C0 solid;font-family:Courier New;font-size:16px;z-index:19" name="qty" value="">
<div id="bv_Text11" style="margin:0;padding:0;position:absolute;left:812px;top:535px;width:33px;height:18px;text-align:left;z-index:20;">
<font style="font-size:16px" color="#000000" face="Arial">Qty:</font></div>

<hr noshade="false" id="Line3" style="color:#000000;background-color:#000000;border:0px;margin:0;padding:0;position:absolute;left:452px;top:600px;width:597px;height:1px;z-index:15">
<hr noshade="false" id="Line4" style="color:#000000;background-color:#000000;border:0px;margin:0;padding:0;position:absolute;left:10px;top:351px;width:1278px;height:1px;z-index:16">
<hr noshade="false" id="Line5" style="color:#000000;background-color:#000000;border:0px;margin:0;padding:0;position:absolute;left:10px;top:714px;width:1279px;height:1px;z-index:17">';

if($price != "0")
{
echo'<div id="bv_Text10" style="margin:0;padding:0;position:absolute;left:540px;top:476px;width:64px;height:19px;text-align:left;z-index:18;">
<font style="font-size:17px" color="#000000" face="Arial">'.$offer.'%off</font></div>';
}

echo'</div>
</body>
</html>';
}
?>
</div>
</div>
<?php include("footer.php");?>

	
</html>