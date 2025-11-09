<?php

include('../dbconnect/dbconnect.php');

$child_id=$_POST['child_id'];
$parent_id=$_POST['parent_id'];
$c_name=$_POST['c_name'];
$dob=$_POST['dob'];
$gender	=$_POST['gender'];


$sql="update child_info set child_id='$child_id',parent_id='$parent_id',c_name='$c_name',dob='$dob',gender='$gender' where child_id='$child_id'";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("update");
document.location="Child_view.php";
</script>