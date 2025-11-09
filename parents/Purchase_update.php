<?php

include('../dbconnect/dbconnect.php');

$purchase_id=$_POST['purchase_id'];
$v_id=$_POST['v_id'];
$batch_no=$_POST['batch_no'];
$dmfg=$_POST['dmfg'];
$dexp=$_POST['dexp'];
$amount=$_POST['amount'];



$sql="update purchase set v_id='$v_id',batch_no='$batch_no',dmfg='$dmfg',dexp='$dexp',amount='$amount' where 	purchase_id='$purchase_id'" ;
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("values successfully updated");
document.location="Purchase_view.php";
</script>