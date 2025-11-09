<?php

include('../dbconnect/dbconnect.php');
$child_id=$_REQUEST['child_id'];
$sql="delete from child_info where child_id =$child_id";
mysqli_query($conn,$sql);
 


?>
<script>
alert("values are deleted successfully");
document.location="Child_view.php";

</script>