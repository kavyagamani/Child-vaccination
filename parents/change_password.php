<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("metadata.php"); ?>
    <?php include('header.php'); ?>
    <?php include('sidebar.php'); ?>
</head>

<body class="adminbody">


  <!-- End Navigation -->
  
 
  <!-- Left Sidebar -->

  <!-- End Sidebar -->


    <div class="content-page">
  
    <!-- Start content -->
        <div class="content">
            
      <div class="container-fluid">


      <div class="row">
          <div class="col-xl-12">
              <div class="breadcrumb-holder">
                                    <!-- <h1 class="main-title float-left">Form validation</h1>
                                    <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Form validation</li>
                                    </ol> -->
                                    <div class="clearfix"></div>
                            </div>
          </div>
      </div>
            <!-- end row -->
      

      

      
      <div class="row">
      
                  <div class="col-xs-20 col-sm-20 col-md-10 col-lg-10 col-xl-10">         
            <div class="card mb-3">
              <div class="card-header">
                <h3><i class="fa fa-hand-pointer-o"></i> Change Password</h3>
                
              </div>
                
              <div class="card-body">

                                
	
<form name="form1" method="post" id="formID" action="changepassword.php" class="form-horizontal">
  <table class="table table-striped table-bordered" id="example">
    
    <tr>
      <td width="163">Old Password*</td>
      <td width="328"><input name="old_password" type="password" id="old_pwd" required="1" /></td>
    </tr>
    <tr>
      <td>New Password* </td>
      <td><input name="new_password" type="password" id="new_password" required="1" /></td>
    </tr>
    <tr>
      <td>Confirm Password* </td>
      <td><input name="confirm_password" type="password" id="con_pwd" required="1" /></td>
    </tr>
    <tr>
      <td height="29" colspan="2"><div align="center">
      <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
       </div></td>
    </tr>
  </table>
  <div align="center"></div>
</form>
           </div>                            
            </div><!-- end card-->          
                    </div>

              </div>                            
            </div><!-- end card-->          
                    </div>
          
          
      </div>

            </div>
      <!-- END container-fluid -->

    </div>
    <!-- END content -->

    </div>
  <!-- END content-page -->
    
  <?php include('footer.php'); ?>

</div>
<!-- END main -->

<?php include('script.php'); ?>
<?php include('val.php'); ?>

</body>
</html>
