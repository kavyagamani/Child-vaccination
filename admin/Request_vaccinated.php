<?php

include('../dbconnect/dbconnect.php');

$request_vaccine_id=$_REQUEST['request_vaccine_id'];

$sql="update request_for_vaccine set req_status='VACCINATED' where request_vaccine_id=$request_vaccine_id";
mysqli_query($conn,$sql);



?>
<script>
alert("Request Updated successfully");
document.location="Request_vaccine_view.php";

</script>