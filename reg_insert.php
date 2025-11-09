<strong></strong>
<?php

include('dbconnect/dbconnect.php');


$hospital_id=$_POST['hospital_id'];
$parent_name=$_POST['parent_name'];
$p_type=$_POST['p_type'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);

if($password==$repassword)
{


$sql="insert into parents values(null,'$hospital_id','$parent_name','$p_type','$phone_no','$email')";
mysqli_query($conn,$sql);


$sql2="insert into login values(null,'$email','$password','parents')";
mysqli_query($conn,$sql2);

?>
<script language="javascript1.2">
alert("you are successfully Registerd");
document.location="login.php";
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