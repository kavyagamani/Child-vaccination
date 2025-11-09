<?php

include('../dbconnect/dbconnect.php');

$vname=$_POST['vname'];
$vtype=$_POST['vtype'];
$stock=$_POST['stock'];
$image=$_POST['image'];
$description=$_POST['description'];


echo $sql="insert into vaccine_master values(null,'$vname','$vtype','$stock','$image','$description')";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("you are successfully logined");
document.location="Vaccine_market_view.php";
</script>