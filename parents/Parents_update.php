<?php

include('../dbconnect/dbconnect.php');

$parent_id =$_POST['parent_id'];
$hospital_id=$_POST['hospital_id'];
$parent_name=$_POST['parent_name'];
$p_type=$_POST['p_type'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="update parents set hospital_id='$hospital_id',parent_name='$parent_name',p_type='$p_type',phone_no='$phone_no',email='$email',password='$password' where parent_id='$parent_id'";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("update");
document.location="Parents_view.php";
</script>