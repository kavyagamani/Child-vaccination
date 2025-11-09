<?php

include('../dbconnect/dbconnect.php');

//$child_id=$_POST['child_id'];
$parent_id=$_POST['parent_id'];
$c_name=$_POST['c_name'];
$dob=$_POST['dob'];
$gender	=$_POST['gender'];


$sql="insert into child_info values(null,'$parent_id','$c_name','$dob','$gender')";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("you are successfully logined");
document.location="Child_view.php";
</script>