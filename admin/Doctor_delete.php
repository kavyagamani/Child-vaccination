<?php

include('../dbconnect/dbconnect.php');
$doctor_id=$_REQUEST['doctor_id'];
$sql="delete from doctor where doctor_id=$doctor_id";
mysqli_query($conn,$sql);
 


?>
<script>
alert("values are deleted successfully");
document.location="Doctor_view.php";

</script>