<?php include ("header.php");?>
<?php include("navigation.php");?>



<div id="main" style="margin-top:0px;margin-left:0px;width:1347px;height:auto;padding-bottom:100px;">

<br/><br/>
<br/><br/>
<div id="remain">
<div class="example">
  
    <form action="change_success.php" method="POST" enctype="multipart/form-data">
            <h1>Address Change</h1>
<br/>
        <fieldset>
             <?php
 
         
             if(isset($_GET['suc'])){
                 if($_GET['suc'] == "1"){echo'<p style="color:red;font-size:18px;">Updated Successfully!!!!!</p>';}
                
                }
           
         ?>
             
               
              <div class="required">
                <label for="username">Home Address:</label>
                <textarea required name="address" id="description" class="inputTextarea" rows="3" cols="51"></textarea>
            </div>
              <div class="required">
                <label for="username">City:</label>
                <input type="text" required x-moz-errormessage="Enter City" name="city" id="username" class="inputText" size="10" maxlength="128" value="" />
            </div>
            <div class="required">
                <label for="username">State:</label>
                <input type="text" required x-moz-errormessage="Enter State" name="state" id="username" class="inputText" size="10" maxlength="128" value="" />
            </div>
 <div class="required">
                <label for="username">Country:</label>
                <input type="text" required x-moz-errormessage="Enter Country" name="country" id="username" class="inputText" size="10" maxlength="128" value="" />
            </div>
<div class="required">
                <label for="pin">Pincode:</label>
                <input type="tel" required pattern='\d\d\d\d\d\d' x-moz-errormessage="Enter your Pincode in format 'xxxxxx '" class="inputext" name="pin" size="6" maxlength="20" value="" />
            </div>

            


            
        </fieldset>
       
            <div class="submit">
                <div>
                    <input type="submit" name="submit" class="large blue button" value="Change" />
                </div>
            </div>

    </form>

    <div style="clear:both"></div>
</div>


</div>
</div>
<?php include("footer.php");?>

	
</html>