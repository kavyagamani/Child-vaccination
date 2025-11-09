<?php

include('../dbconnect/dbconnect.php');

//$request_vaccine_id  =$_POST['request_vaccine_id  '];
$v_id=$_POST['v_id'];
$c_id=$_POST['c_id'];
$req_date=$_POST['req_date'];
$req_status	=$_POST['req_status'];

$sql="insert into request_for_vaccine values(null,'$v_id','$c_id','$req_date','$req_status')";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("you are successfully logined");
document.location="Request_vaccine_view.php";
</script>