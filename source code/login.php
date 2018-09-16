<?php include ("header.php");?>
<?php include("navigation.php");?>



<div id="main" style="margin-top:0px;margin-left:0px;width:1347px;height:auto;padding-bottom:100px;">

<br/><br/>
<br/><br/>
<div id="remain">
<div class="example">
  
    <form action="login_submit.php" method="POST" enctype="multipart/form-data">
            <h1>Login</h1>
<br/>
        <fieldset>
         <?php
 
         
             if(isset($_GET['error'])){
                 if($_GET['error'] == "1"){echo'<p style="color:red;font-size:18px;">Wrong Username or password</p>';}
                elseif($_GET['error'] == "2") {echo'<p style="color:red;font-size:18px;">Account Not Activated..Please Check Your Email</p>';}
}
           
         ?>
              <div class="required">
                <label for="username">Username:</label>
                <input type="text" required x-moz-errormessage="Enter Username" name="username" id="username" class="inputText" size="10" maxlength="128" value="" />
            </div>



         <div class="required">
                <label for="password">Password:</label><input type='password' name="password" id="password"class="inputText" size="10" maxlength="128" value=""><br /><br />
                
            </div>
            


            
        </fieldset>
       
            <div class="submit">
                <div>
                    <input type="submit" name="submit" class="large blue button" value="Login" />
                </div>
            </div>

    </form>

    <div style="clear:both"></div>
</div>


</div>
</div>
<?php include("footer.php");?>

	
</html>