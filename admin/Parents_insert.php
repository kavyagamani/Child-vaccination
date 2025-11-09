<strong></strong>
<?php

include('../dbconnect/dbconnect.php');

$hospital_id=$_POST['hospital_id'];
$parent_name=$_POST['parent_name'];
$p_type=$_POST['p_type'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];


$sql="insert into parents values(null,'$hospital_id','$parent_name','$p_type','$phone_no','$email')";
mysqli_query($conn,$sql);



$sql2="insert into login values(null,'$email','$phone_no','parents')";
mysqli_query($conn,$sql2);

?>
<script language="javascript1.2">
alert("you are successfully logined");
document.location="Parents_view.php";
</script>
