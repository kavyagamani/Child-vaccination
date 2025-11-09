<?php

include('../dbconnect/dbconnect.php');


$child_id=$_REQUEST['child_id'];
$vid=$_REQUEST['vid'];
$date=date('Y-m-d');

$sql="insert into request_for_vaccine values(null,'$child_id','$vid','$date','REQUEST')";
mysqli_query($conn,$sql);


?>
<script language="javascript1.2">
alert("Your Request is accepted");
document.location="Request_vaccine_view.php";
</script>