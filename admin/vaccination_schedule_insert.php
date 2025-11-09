<?php

include('../dbconnect/dbconnect.php');


$child_id=$_POST['c_id'];
$doctor_id=$_POST['d_id'];
$v_id=$_POST['v_id'];
$transaction=$_POST['transaction'];




$sql="insert into vaccination_schedule values(null,'$child_id','$doctor_id','$v_id','$transaction','PENDING')";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("you are successfully logined");
document.location="Vaccination_schedule_view.php";
</script>