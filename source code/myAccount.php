<?php include ("header.php");?>
<?php include("navigation.php");
include("config.php");
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
<h1 style="font-size:20px;"> Account Summary:</h1>
<br/>
<?php
$user = $_SESSION['username'];

                         

 $get2=mysql_query('SELECT * FROM items_sold  WHERE username="'.$user.'" ');

if(mysql_fetch_assoc($get2) == false)
{
echo '<p style="font-size:15px;color:red;">No Items Purchsed</p>';
}
else
{

     echo "<table >
<tr>
<th>Transaction Id</th>
<th>Product Name</th>
<th>Cost(Rs.)</th>
<th>Qty</th>
<th>Net Cost(Rs.)</th>
<th>Date of Order</th>
<th>Patment Type</th>
<th>Status</th> 
<th></th>
</tr>";
     while($rows2=mysql_fetch_assoc($get2))
     {      
          $get=mysql_query('SELECT * FROM purchase_details WHERE transid="'.$rows2['transid'].'" ');
               while($rows=mysql_fetch_assoc($get))
	{
                   $get3=mysql_query('SELECT * FROM products_details WHERE pid="'.$rows2['pid'].'" ');
                   while($rows3=mysql_fetch_assoc($get3))
	{
  echo "<tr>";
  echo "<td>" . $rows2['transid'] . "</td>";
  echo "<td>" . $rows3['name'] . "</td>";
  echo "<td>" . $rows3['current_price'] . "</td>";
  echo "<td>" . $rows2['qty'] . "</td>";
  $net_cost =  $rows3['current_price'] * $rows2['qty'];
  echo '<td>'.$net_cost.'</td>';
 echo '<td>'.$rows['date'].'</td>';
 echo '<td>'.$rows['method_paid'].'</td>';
echo '<td>'.$rows['status'].'</td>';
  echo "</tr>";

                 }
                 }

    }
}
echo "</table>";  

?>
<br/>
<br/>
<h1 style="font-size:20px;"> Address for Delivery:</h1><br/>
<?php

 $get2=mysql_query('SELECT * FROM users_details  WHERE username="'.$_SESSION['username'].'" ');
     while($rows2=mysql_fetch_assoc($get2))
     {      
                
        echo '<p style="font-size:16px;">'.$rows2['home_address'].'</p><p style="font-size:16px;">'.$rows2['city'].'</p><p style="font-size:16px;">'.$rows2['state'].'</p><p style="font-size:16px;">'.$rows2['country'].'</p>
                       <p style="font-size:16px;">'.$rows2['pincode'].'</p><br/>';


      }
?>
<br/>
<a style="text-decoration:none;" href="change_address.php"><p style="font-size:16px;color:red;font-style:bold;">Click Here to Change Address..</p></a> 




</div>
</div>


<?php include("footer.php");?>


