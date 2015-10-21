
<!DOCTYPE html>
<html lang="en">
  <?php include('../links/head_links.php'); ?>
 
  <body>
  
    
    
    
    <!--
    ===========================================================
    BEGIN PAGE
    ===========================================================
    -->
    
     
    <div class="container">
      <div class="row">
         <div class="row">
        <?php include('../links/head_name.php'); ?>
      </div>
      
        <div class="row">
            <?php include('../links/nav.php'); ?>
          </div>    
          
          <div class="row">
            <div class="col-sm-3"></div>
              <div class="col-sm-6">
            <div class="panel with-nav-tabs panel-success">
              <div class="panel-heading">
              <label>Login Here</label>
              </div>
              <div class="the-box">
              
<?php
$page_title='Login';
if(isset($errors) && !empty($errors))
{

  foreach($errors as $msg)
  {
    echo "- $msg <br>" ;
  }
  echo'<font size="5px" color="red">Please try again or <a href="register.php">Register</a></p></font>' ;
}
?>  
             
                <form action="login_action.php" method="POST" role="form">
                  <div class="form-group">
                  <label>UST Id</label>
                  <input class="form-control" name="ust_id" placeholder="UST ID" type="name" required>
                  </div>
                  <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" name="pass" placeholder="Password" type="password" required>
                  </div>
                  
                  <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
                    <a href="../register">
                   <button  class="btn btn-danger"><i class="fa fa-sign-in"></i> Register</button>
                    </a>
                </form>
              </div><!-- /.the-box -->
            </div>  
            </div>
            <div class="col-sm-3"></div>
          </div>




          <div class="row">
            <?php include('../links/footer.php') ?>
          </div>
        
        
      
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
    
    
    <!-- MAIN APPS JS -->
    <script src="../stylesheet/assets/js/apps.js"></script>
    

  </body>
</html>
