<?php

include('../dbconnect/dbconnect.php');

$hospital_id=$_POST['hospital_id'];
$hospital_name=$_POST['hospital_name'];
$address=$_POST['address'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
$website=$_POST['website'];
$majorfacilities=$_POST['majorfacilities'];
$emergency_no=$_POST['emergency_no'];

$sql="update hospital set hospital_name='$hospital_name',address='$address',phone_no='$phone_no',email='$email',website='$website',majorfacilities='$majorfacilities',emergency_no='$emergency_no' where hospital_id='$hospital_id'";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert('update');
document.location="hospital_view.php";
</script>