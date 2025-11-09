<?php

include('../dbconnect/dbconnect.php');
$hospital_id=$_REQUEST['hospital_id'];
$sql="delete from hospital where hospital_id=$hospital_id";
mysqli_query($conn,$sql);
 

?>
<script>
alert("values are deleted successfully");
document.location="hospital_view.php";

</script>