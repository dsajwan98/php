<?php
session_start();
if(!$_SESSION['email'])
{

	header("location: login.php");

}
?>

<html>
<head>
	<title>REGISTARTION</title>
</head>
<body>
<h1>welcome</h1></br>
<?php
echo $_SESSION['email'];
?>
<h1><a href="logout.php">logout here</a></h1>
</body>
</html>