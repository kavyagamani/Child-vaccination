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
                <h3><i class="fa fa-hand-pointer-o"></i> Vaccine Master  Details</h3>
                
              </div>
                
              <div class="card-body">
              <!----------------------------------------------->
<?php
include('val.php');
?>
<a href="Vaccine_market_view.php" ><i class="fa fa-fw fa-arrow-left"></i>Back</a>
<form action="Vaccine_market_insert.php" method="post" enctype="multipart/form-data" name="formID" id="formID">
  <table width="491" height="445" border="0"align="center">
    
   <tr>
      <td height="53">Vaccine Type:</td>
      <td><select name="vtype" class="form-control validate[required]" id="vtype">
        <option value="polio">polio</option>
        <option value="inactivated">inactivated</option>
        <option value="viral">viral</option>
        <option value="toxoid">toxoid</option>
 
      </select></td>
    </tr><tr>
      <td width="198" height="51">Vaccine Name:</td>
      <td width="277"><select name="vname" class="form-control validate[required]" id="vname">
        <option value="BCG">BCG</option>
        <option value="HepB1">HepB1</option>
        <option value="OPv">OPV</option>
        <option value="DTWP">DTWP</option>
        <option value="Influenza">Influenza</option>
        <option value="Rota-1">Rota-1</option>
        <option value="rota-2">Rota-2</option>
        <option value="rota-3">Rota-3</option>
            </select></td>
    </tr>
    <tr>
      <td height="60">Stock:</td>
      <td><input type="text" name="stock"  id="stock" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="60">Image:</td>
      <td><input type="file" name="file" id="file" class="form-control validate[required]"></td>
    </tr>
    <tr>
      <td height="109">Description:</td>
      <td><textarea name="description" id="description" class="form-control validate[required]"></textarea></td>
    </tr>
    <tr>
      <td height="50" colspan="2" align="center"><input type="submit" name="Submit" value="Submit" class="btn btn-primary">
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

