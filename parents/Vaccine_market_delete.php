<?php

include('../dbconnect/dbconnect.php');
$v_id=$_REQUEST['v_id'];
$sql="delete from vaccine_master where v_id=$v_id";
mysqli_query($conn,$sql);
 

?>
<script>
alert("values are deleted successfully");
document.location="Vaccine_market_view.php";

</script>