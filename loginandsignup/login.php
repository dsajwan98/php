<?php
session_start();
?>

<html>
<head>
	<title>login page</title>
</head>
<body>
<form method="post" action="login.php">
	<fieldset>
		<b>PLEASE ENTER YOUR EMAILID :</b><input type="email" placeholder="email" name="txtmail" autofocus>
	</br>
<b>PLEASE ENTER YOUR PASSWORD :</b><input type="password" placeholder="password" name="txtpass" value=""></br>
<input type="submit" value="login" name="login">
</fieldset>
</form>  
</body>
</html>
<?php
include("dbconnection.php");
if(isset($_POST['login']))
{
$user_email=$_POST['txtmail'];
$user_pass=$_POST['txtpass'];
$sql="select * from login where email='$user_email' AND password='$user_pass'";
$run=mysqli_query($dbcon,$sql);
if(mysqli_num_rows($run))
{

echo"<script>window.open('welcome.php','_self')</script>";
$_SESSION['email']=$user_email;
}
else
{
	echo"<script>alert('email or password is incorrect')</script>";
}
}
?>