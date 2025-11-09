<?php

include('../dbconnect/dbconnect.php');

$hospital_name=$_POST['hospital_name'];
$address=$_POST['address'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
$website=$_POST['website'];
$majorfacilities=$_POST['majorfacilities'];
$emergency_no=$_POST['emergency_no'];

$sql="insert into hospital values(null,'$hospital_name','$address','$phone_no','$email','$website','$majorfacilities','$emergency_no')";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert('you are successfully logined');
document.location="hospital_view.php";
</script>