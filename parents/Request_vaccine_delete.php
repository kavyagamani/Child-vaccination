<?php

include('../dbconnect/dbconnect.php');
$request_vaccine_id=$_REQUEST['request_vaccine_id'];
$sql="delete from request_for_vaccine where request_vaccine_id=$request_vaccine_id";
mysqli_query($conn,$sql);
 

?>
<script>
alert("values are deleted successfully");
document.location="Request_vaccine_view.php";

</script>