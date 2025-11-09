<?php

include('../dbconnect/dbconnect.php');

//$vschedule_id  =$_POST['vschedule_id  '];
$v_id=$_POST['v_id'];
$duration_of_vaccine=$_POST['duration_of_vaccine'];
$dtype=$duration_of_vaccine.' '.$_POST['dtype'];
$description=$_POST['description'];


$sql="insert into v_schedule values(null,'$v_id','$dtype','$description')";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("you are successfully logined");
document.location="Vaccine_schedule_view.php";
</script>