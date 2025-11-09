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
                <h3><i class="fa fa-hand-pointer-o"></i> Hospital Details</h3>
                
              </div>
                
              <div class="card-body">
              <!----------------------------------------------->
<?php
include('val.php');
?>

<a href="hospital_view.php" ><i class="fa fa-fw fa-arrow-left"></i>Back</a>
<form name="formID" id="formID" method="post" action="Hospital_insert.php">
  <table width="513" height="661" border="0" align="center">
    
    <tr>
      <td width="225">Hospital name:</td>
      <td width="272">
        <input type="text" name="hospital_name" class="form-control validate[required,custom[onlyLetter]]" id="hospital_name"></td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><textarea name="address" id="address" class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td>Phone No:</td>
      <td><input type="number" name="phone_no" id="phone_no" class="form-control validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="email" name="email"  id="email_id" class="form-control validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td>Website:</td>
      <td><input type="text"  name="website" id="website" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Majorfacilities:</td>
      <td><select name="majorfacilities" id="majorfacilities" class="form-control validate[required]">
        <option value="Day_care_services">Day_care_services</option>
        <option value="Clinical_laboratary">Clinical_laboratory</option>
      </select></td>
    </tr>
    <tr>
      <td>Emergency No:</td>
      <td><input type="number" name="emergency_no" id="emergency_no" class="form-control validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td height="56" colspan="2" align="center"><input type="submit" name="Submit" value="Submit"class="btn btn-primary">    
	    <input type="Reset" name="Reset" value="Reset" class="btn btn-danger"></td>
    </tr>
  </table>
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


