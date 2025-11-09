<?php

include('../dbconnect/dbconnect.php');
$doctor_id=$_POST['doctor_id'];
$hospital_id=$_POST['hospital_id'];
$doctor_name=$_POST['doctor_name'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
$specialization=$_POST['specialization'];
$password=$_POST['password'];
$alternate_no=$_POST['alternate_no'];


$sql="update doctor set hospital_id='$hospital_id',doctor_name='$doctor_name',phone_no='$phone_no',email='$email',specialization='$specialization',password='$password',alternate_no='$alternate_no' where doctor_id='$doctor_id'";

mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("update");
document.location="Doctor_view.php";
</script>