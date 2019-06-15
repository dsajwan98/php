<html>
<head>
	<title>registartion form</title>
</head>
<body><CENTER>
	<h1>REGISTRATION FORM</h1>
<form method="post" action="registration.php">
	USERNAME: <input type="text" placeholder="USERNAME" name="txtname">
	PASSWORD: <input type="password" placeholder="PASSWORD" name="txtpass">
	EMAILID:  <input type="email" placeholder="EMAILID" name="txtemail">
	<input type="submit" value="SIGNUP" name="register">

</form>
</CENTER>
</body>
</html>
<center><b>Already register? </b><br></b><a href="login.php">LOGIN HERE</a></center>
<?php
include ("dbconnection.php");
if(isset($_POST['register'])) 
{
$name=$_POST['txtname'];
$pass=$_POST['txtpass'];
$mail=$_POST['txtemail'];

if($name=='')
{
	echo"<script>alert('please enter the name')</script>";
	exit();
}
if($pass=='')
{
	echo"<script>alert('please enter the password')</script>";
	exit();
}
if($mail=='')
{
	echo"<script>alert('please enter the email id')</script>";
	exit();
}
$check="select * from login where email='$mail'";
$run_query=mysqli_query($dbcon,$check);
if(mysqli_num_rows($run_query)>0)
{
	echo "<script>alert('email $mail is already exit in our database , please try another one ')</script>";
	exit();
}
$insert="insert into login (email,username,password) VALUES('$mail','$name','$pass')";
if(mysqli_query($dbcon,$insert))
{
echo"<script>window.open('welcome.php','_self')</script>";
}

}
?>
