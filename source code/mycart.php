<?php include ("header.php");?>
<?php include("navigation.php");
include("config.php");
$user = $_SESSION['username'];
?>
<head>
<style>
table
{
border-collapse:collapse;
}
table, td, th
{
border:1px solid #0182b5;
padding:5px;
}
th
{
background-color:#0182b5;
color:white;
}
</style>
<script>
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

function delCart(id,qty,row)
{
    
	row = row.parentNode.parentNode;
	alert("Are you sure?");

    ajaxFunction("delCart.php?pid="+id+"&qt="+qty, function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
               row.parentNode.removeChild(row);
           
        }
    });
}




</script>
</head>


<div id="main" style="margin-top:0px;margin-left:0px;width:1347px;height:auto;padding-bottom:100px;">

<br/><br/>
<br/><br/>
<div id="remain">
<h1 style="font-size:20px;">My Cart</h1>
<br/>
<?php

$total =0;
       echo "<table >
<tr>
<th>Product Name</th>
<th>Cost(Rs.)</th>
<th>Qty</th>
<th>Net Cost(Rs.)</th>
<th>Remove</th>
<th>Place Order</th>
</tr>";                  

 $get2=mysql_query('SELECT * FROM cart WHERE username="'.$user.'" ');
  if(!mysql_fetch_assoc($get2) )
{

  echo '<p style="font-size:15px;color:red;">No Items in Cart</p>'; 

}
else
{ 
      while($rows2=mysql_fetch_assoc($get2))
     {      
          $get=mysql_query('SELECT * FROM products_details WHERE pid="'.$rows2['pid'].'" ');
               while($rows=mysql_fetch_assoc($get))
	{

  echo "<tr>";
  echo "<td>" . $rows['name'] . "</td>";
  echo "<td>" . $rows['current_price'] . "</td>";
  echo "<td>" . $rows2['qty'] . "</td>";
  $net_cost =  $rows['current_price'] * $rows2['qty'];
  echo '<td>'.$net_cost.'</td>';
 echo '<td><img class="del_img" onclick="javascript:delCart('.$rows['pid'].','.$rows2['qty'].', this)" src= "css/images/del.png"/></td>';
echo '<td><a href="buyNow2.php?pid='.$rows['pid'].'&qty2='.$rows2['qty'].'">Place Order</a></td>';
  echo "</tr>";

                 }


    }

echo "</table>";  
    
}
?>



</div>
</div>


<?php include("footer.php");?>


