
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UST Library is silence place for your study and make a good career">
    <meta name="keywords" content="ust,library,mukherjee nagar, delhi, upsc, ssc, bank, competitive exam ">
    <meta name="author" content="Ashish kumar pandey, Ujjwal Pandey">
    <meta name="google-site-verification" content="24j1anY6SAUhnM78R6ztpaA1CHPiT0XYvkSnM388g5E" />
    <title>UST Library | www.ustlibrary.in</title>
 
    <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
    <link href="../stylesheet/assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- PLUGINS CSS -->
    
    <!---///////// ----->
    
    <!-- MAIN CSS (REQUIRED ALL PAGE)-->
    <link href="../stylesheet/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../stylesheet/assets/css/ust_style.css" rel="stylesheet">
    <link href="../stylesheet/assets/css/style.css" rel="stylesheet">

    <link href="../stylesheet/assets/css/style-responsive.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
  <body>
  
    
    
    
    <!--
    ===========================================================
    BEGIN PAGE
    ===========================================================
    -->
    
     
    <div class="container " style="margin-top:">
      <div class="row">
        <div class="row">
            <?php include('../php/index_nav.php'); ?>
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
                  <label>UST ID</label>
                  <input class="form-control" name="ust_id" placeholder="UST ID" type="name" required>
                  </div>
                  <div class="form-group">
                  <label>Password</label>
                  <input class="form-control" name="pass" placeholder="Password" type="password" required>
                  </div>
                  
                  <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
                   <button type="submit" class="btn btn-danger"><i class="fa fa-sign-in"></i> Register</button>
                </form>
              </div><!-- /.the-box -->
            </div>  
            </div>
            <div class="col-sm-3"></div>
          </div>




          <div class="row">
            <?php include('../php/index_footer.php') ?>
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
