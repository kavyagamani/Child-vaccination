<?php

include('../dbconnect/dbconnect.php');

$v_id=$_POST['v_id'];
$vname=$_POST['vname'];
$vtype=$_POST['vtype'];
$stock=$_POST['stock'];
$image=$_POST['image'];
$description=$_POST['description'];


$sql="update vaccine_master set vname='$vname',vtype='$vtype',stock='$stock',image='$image',description='$description' where v_id='$v_id'";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("updated");
document.location="Vaccine_market_view.php";
</script>