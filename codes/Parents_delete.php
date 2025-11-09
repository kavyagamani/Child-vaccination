<?php

include('../dbconnect/dbconnect.php');
$parent_id=$_REQUEST['parent_id'];
$sql="delete from parents where parent_id=$parent_id";
mysqli_query($conn,$sql);
 

?>
<script>
alert("values are deleted successfully");
document.location="Parents_view.php";

</script>