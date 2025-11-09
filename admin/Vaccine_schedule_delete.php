<?php

include('../dbconnect/dbconnect.php');
$vschedule_id=$_REQUEST['vschedule_id'];
$sql="delete from v_schedule where vschedule_id=$vschedule_id";
mysqli_query($conn,$sql);
 

?>
<script>
alert("values are deleted successfully");
document.location="Vaccine_schedule_view.php";

</script>