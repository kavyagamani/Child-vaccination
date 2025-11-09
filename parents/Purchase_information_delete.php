<?php

include('../dbconnect/dbconnect.php');
$purchase_id=$_REQUEST['purchase_id'];
$sql="delete from purchase where purchase_id=$purchase_id";
mysqli_query($conn,$sql);
 

?>
<script>
alert("values are deleted successfully");
document.location="Purchase_view.php";

</script>