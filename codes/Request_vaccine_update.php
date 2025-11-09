<?php

include('../dbconnect/dbconnect.php');

$request_vaccine_id=$_POST['request_vaccine_id'];
$v_id=$_POST['v_id'];
$c_id=$_POST['c_id'];
$req_date=$_POST['req_date'];
$req_status	=$_POST['req_status'];

$sql="update request_for_vaccine set v_id='$v_id',c_id='$c_id',req_date='$req_date',req_status='$req_status' where
request_vaccine_id='$request_vaccine_id'";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("the values successfully updated");
document.location="Request_vaccine_view.php";
</script>