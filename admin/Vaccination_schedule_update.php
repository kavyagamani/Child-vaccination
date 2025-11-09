<?php

include('../dbconnect/dbconnect.php');

$vaccination_schedule_id=$_POST['vaccination_schedule_id'];
$child_id=$_POST['c_id'];
$doctor_id=$_POST['d_id'];
$v_id=$_POST['v_id'];
$transaction=$_POST['transaction'];
$date_of_vaccine =$_POST['dob'];



$sql="update vaccination_schedule set child_id='$child_id',doctor_id='$doctor_id',v_id='$v_id',transaction='$transaction',date_of_vaccine='$dob' where vaccination_schedule_id='$vaccination_schedule_id'";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("update");
document.location="Vaccination_schedule_view.php";
</script>