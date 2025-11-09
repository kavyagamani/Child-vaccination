<?php
session_start();


include('dbconnect/dbconnect.php');

$username=$_POST['username'];
$password=md5($_POST['password']);


$sql="select * from login where username='$username' and password='$password'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{

$type=$row['type'];

$_SESSION['uname']=$username;

if($type=='admin')
{

	header('location:admin/home.php');
}


else if($type=='parents')
{

	header('location:parents/home.php');
}


}
else
{
	?>
<script >
	alert('Invalid Username Or Password...');
	history.back();
</script>
	<?php
}
?>