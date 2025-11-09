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
                <h3><i class="fa fa-hand-pointer-o"></i> Doctor Information  Details</h3>
                
              </div>
                
              <div class="card-body">
              <!----------------------------------------------->
<?php
include('val.php');
?>
<script type="text/javascript">
   function call()
  {
    var password=document.formID.password.value;
    var repassword=document.formID.repassword.value;
   

    if(password!=repassword)
    {
      alert("password does not matched");
      document.formID.password.focus();
      document.formID.repassword.value="";
    }
  }
</script>
<a href="hospital_view.php" ><i class="fa fa-fw fa-arrow-left"></i>Back</a>
<form name="formID" id="formID" method="post" action="Doctor_insert.php">
  <table width="480" height="486" border="0" align="center">
    
    <tr>
      <td width="204" height="36">Select Hospital:</td>
      <td width="260"><select name="hospital_id" id="hospital_id" class="form-control"> 
      <option>Select Hospital</option>
	  <?php
	  include('../dbconnect/dbconnect.php');

$sql="select * from hospital";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{

?>  
<option value="<?php echo $row['hospital_id'];?>"><?php echo $row['hospital_name'];?></option>
<?php 
}
?>
</select>  
  </td>
    </tr>
    <tr>
      <td height="51">Doctor Name:</td>
      <td><input type="text" name="doctor_name" id="doctor_name" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td height="56">Phone No:</td>
      <td><input type="number" name="phone_no"  id="phone_no" class="form-control validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td height="55">Email:</td>
      <td><input type="email" name="email" id="email" class="form-control validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td height="58">Specialisation:</td>
      <td><select name="specialization" id="specialization"class="form-control validate[required]">
        <option value="Embriologist">Embriologist</option>
        <option value="pedetrician">pedetrician</option>
      </select></td>
    </tr>
    <tr>
      <td height="56">Password:</td>
      <td><input type="password" name="password"  id="password" maxlength="6" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="56">Retype Password:</td>
      <td><input type="password" name="repassword" onBlur="call()"  id="repassword" maxlength="6" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="50">Alternate No:</td>
      <td><input type="text" name="alternate_no" class="form-control validate[required,custom[mobile]] "></td>
    </tr>
    <tr align="center">
      <td height="43" colspan="2">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
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
