<?php

include('../dbconnect/dbconnect.php');
$vaccination_schedule_id=$_REQUEST['vaccination_schedule_id'];
$sql="delete from vaccination_schedule where vaccination_schedule_id=$vaccination_schedule_id";
mysqli_query($conn,$sql);
 

?>
<script>
alert("values are deleted successfully");
document.location="Vaccination_schedule_view.php";

</script>