<?php

include('../dbconnect/dbconnect.php');

$vschedule_id=$_POST['vschedule_id'];
$v_id=$_POST['v_id'];
$duration_of_vaccine=$_POST['duration_of_vaccine'];
$description=$_POST['description'];


$sql="update v_schedule set v_id='$v_id',duration_of_vaccine='$duration_of_vaccine',v_description='$description' where vschedule_id='$vschedule_id'";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("update");
document.location="Vaccine_schedule_view.php";
</script>