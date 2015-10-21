<?php
session_start();
if(!isset($_SESSION['ust_id']))
{ 


}

$_SESSION =array();

session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <?php include('../links/head_links.php'); ?>



  <body>
    
    
    
    <!--
    ===========================================================
    BEGIN PAGE
    ===========================================================
    -->
    
     
    <div class="container ">
      <div class="row">
       <h3>@Sign Up Yourself for Login on UST Library to give many Test papers and taking many educational offer.
       </h3>
      </div>
        <div class="row">
            <?php include('../links/nav.php'); ?>
          </div>    
          
          <div class="row">
            <div class="col-sm-3"></div>
              <div class="col-sm-6">
            <div class="panel with-nav-tabs panel-success">
              <div class="panel-heading">
              <label>Sign Up Here</label>
              </div>
              <div class="the-box">
              
<?php

if(isset($errors) && !empty($errors))
{

  foreach($errors as $msg)
  {
    echo "- $msg <br>" ;
  }
  echo'<font size="5px" color="red">Please try again or <a href="../register">Register</a></p></font>' ;
}
?>  
             
                <form action="register_action.php" method="POST" role="form">
                  <div class="form-group">
                  <label>First Name</label>
                  <input class="form-control" name="first_name" placeholder="first Name" type="name" required>
                  </div>
                  <div class="form-group">
                  <label>last Name</label>
                  <input class="form-control" name="last_name" placeholder="last Name" type="name" required>
                  </div>
                   <div class="form-group">
                  <label>Mobile Number</label>
                  <input class="form-control" name="m_number" placeholder="0000000000" type="name" required>
                  </div>
                   <div class="form-group">
                  <label>Email Id</label>
                  <input class="form-control" name="e_id" placeholder="email@ustlibrary.in" type="email" id="course" onchange="valuesOfAll(this.value) required>
                  </div>

                  <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" name="pass" placeholder="Password" type="password" id="txtNewPassword"  required>
                  </div>
                  <div class="form-group">
                  <label>Re-Password</label>
                  <input class="form-control" name="repass" placeholder="Re-Password" type="password" id="txtConfirmPassword" onkeyup="checkPasswordMatch()"; required>
                  </div>
                      <div style="color:#00FF00" class="registrationFormAlert" id="divCheckPasswordMatch">
                  </div>
                  </div>
                 
                   <button type="submit" class="btn btn-danger"><i class="fa fa-sign-in"></i> Register</button>
                </form>
              </div><!-- /.the-box -->
            </div>  
            </div>
            <div class="col-sm-3"></div>
          </div>




          <div class="row">
            <?php include('../links/footer.php') ?>
          </div>
   </div><!-- /.wrapper -->
    <!-- END PAGE CONTENT -->
    
    
  
    
    
  
    
    
    
    <!--
    ===========================================================
    END PAGE
    ===========================================================
    -->
    
    <!--
    ===========================================================
    Placed at the end of the document so the pages load faster
    ===========================================================
    -->
    <!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
    <script src="../stylesheet/assets/js/jquery.min.js"></script>
    <script src="../stylesheet/assets/js/bootstrap.min.js"></script>
    
    <!-- PLUGINS -->
    
    <script type="text/javascript"><!--
function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}
//--></script>
    <!-- MAIN APPS JS -->
    <script src="../stylesheet/assets/js/apps.js"></script>
    

  </body>
</html>
