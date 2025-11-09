<?php

include('../dbconnect/dbconnect.php');

$vname=$_POST['vname'];
$dtype=$_POST['dtype'];
$duration=$_POST['duration'];
$stock=$_POST['stock'];
$description=$_POST['description'];


$photo=$_FILES['photo']['name'];
$tmp_location=$_FILES['photo']['tmp_name'];
$target="../photos/".$photo;
move_uploaded_file($tmp_location,$target);


$sql="insert into vaccine_master values(null,'$vname','$dtype','$duration','$stock','$photo','$description')";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("you are successfully logined");
document.location="Vaccine_market_view.php";
</script>