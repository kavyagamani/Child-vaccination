<?php

include('../dbconnect/dbconnect.php');
$request_vaccine_id=$_REQUEST['request_vaccine_id'];
$purchase_id=$_POST['purchase_id'];
$v_id=$_POST['v_id'];
$batch_no=$_POST['batch_no'];
$dmfg=$_POST['dmfg'];
$dexp=$_POST['dexp'];
$amount=$_POST['amount'];



$sql="insert into purchase values(null,'$v_id','$batch_no','$dmfg','$dexp','$amount')";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("you are successfully logined");
document.location="Purchase_view.php";
</script>