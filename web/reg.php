<?php include ("header.php");?>
<?php include("navigation.php");?>





<div id="main" style="margin-top:0px;margin-left:0px;width:1347px;height:auto;padding-bottom:100px;">

<br/><br/>
<br/><br/>
<div id="remain">
<div class="example">
  
    <form action="submit.php" method="POST" enctype="multipart/form-data">
         <h1>Signup</h1>
<br/>
<?php
 if(isset($_GET['suc'])){
                 if($_GET['suc'] == "1"){echo'<p style="color:red;font-size:18px;">Thankyou..Account activation link is sent to your email</p>';}
              
}
?>
<br/>
        <fieldset>
            
            <legend>General Information</legend>

            <div class="required">
                <label for="firstname">First Name:</label>
                <input type="text" required x-moz-errormessage="Enter First Name" name="firstname" id="firstname" class="inputText" size="10" maxlength="128" value="" />
            </div>

            <div class="required">
                <label for="lastname">Last Name:</label>
                <input type="text" required x-moz-errormessage="Enter Last Name" name="lastname" id="lastname" class="inputText" size="10" maxlength="128" value="" />
            </div>
             
            <div class="required">
                <label for="description">Address:(used for sending products as Default)</label>
                <textarea required name="address" id="description" class="inputTextarea" rows="3" cols="51"></textarea>
            </div>
             
            <div class="required">
                <label for="city">City:</label>
                <input type="text" required x-moz-errormessage="Enter City" name="city" id="city" class="inputText" size="20" maxlength="128" value="" />
            </div>
             
              <div class="required">
                <label for="state">State:</label>
                <input type="text" required x-moz-errormessage="Enter State" name="state" id="state" class="inputText" size="20" maxlength="128" value="" />
            </div>

                 <div class="required">
                <label for="country">Country:</label>
                <input type="text" required x-moz-errormessage="Enter Country" name="country" id="country" class="inputText" size="20" maxlength="128" value="" />
            </div>

             <div class="required">
                <label for="pin">Pincode:</label>
                <input type="tel" required pattern='\d\d\d\d\d\d' x-moz-errormessage="Enter your Phone number in format 'xxxxxx '" class="inputext" name="pincode" size="6" maxlength="20" value="" />
            </div>


          
 
              <div class="required">
                <label for="phone">Contact Number:</label>
                <input type="tel" required pattern='\d\d\d\d\d\d\d\d\d\d' x-moz-errormessage="Enter your Phone number in format 'xxxxxxxxxx'" name="contact" class="inputText" size="10" maxlength="30" value="" />
            </div>


            <div class="required">
                <label for="email">Email:(Used for sending account conformation email)</label>
                <input type='email' required pattern=".*@.*mail\.com" x-moz-errormessage="Enter your email (gmail.com)" name="email" id="email" class="inputText" size="10" maxlength="128" value="" />
            </div>
        </fieldset>
        <fieldset>
            <legend>Account Information</legend>
         
              <div class="required">
                <label for="username">Username:</label>
                <input type="text" required x-moz-errormessage="Enter Username" name="username" id="username" class="inputText" size="10" maxlength="128" value="" />
            </div>



         <div class="required">
                <label for="password">Password</label><input type='password' name="password" id='p1'><br /><br />
                <label for="password">Confirm Password</label><input type='password' onfocus="validatePass(document.getElementById('p1'), this);" oninput="validatePass(document.getElementById('p1'), this);"> 
            </div>
            


            <div class="optional">
                <label for="agreement">Subscription:</label>
                <input type="checkbox" name="subscribe" id="subscribe" value="yes" /> Subscribe to our news
            </div>

            <div class="required">
                <label for="agreement">Agreement:</label>
                <input type="checkbox" required x-moz-errormessage="Need Check It" name="agreement" id="agreement" value="yes" /> I have read and agreed with Terms of Use.
            </div>
        </fieldset>
        <fieldset>
            <div class="submit">
                <div>
                    <input type="submit" name="submit" class="large blue button" value="Signup" />
                </div>
            </div>
        </fieldset>
    </form>

    <div style="clear:both"></div>
</div>


</div>
</div>
<?php include("footer.php");?>

	
</html>