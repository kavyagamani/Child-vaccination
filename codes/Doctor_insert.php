<?php

include('../dbconnect/dbconnect.php');

$hospital_id=$_POST['hospital_id'];
$doctor_name=$_POST['doctor_name'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
$specialization=$_POST['specialization'];
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);
$alternate_no=$_POST['alternate_no'];

if($password==$repassword)
{

$sql="insert into doctor values(null,'$hospital_id','$doctor_name','$phone_no','$email','$specialization','$password','$alternate_no')";
mysqli_query($conn,$sql);

?>
<script language="javascript1.2">
alert("you are successfully logined");
document.location="Doctor_view.php";
</script>
<?php 
}
else
{
?>
<script language="javascript1.2">
alert("password does not matched");
history.back();
</script>

<?php 
}

?>