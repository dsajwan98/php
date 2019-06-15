<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>greeting</title>
</head>
<body>
  <h2>
   Welcome to the php lab
  </h2>
  <?php 
     if (!isset($_SESSION['visit_count'])) {

     	echo "Welcome ","<br>";
     	$_SESSION['visit_count']=1;
     }
     else
     {
     	$visit_count=$_SESSION['visit_count']+1;
     	echo "back again are ya? thats makes $visit_count times now";
     	$_SESSION['visit_count']=$visit_count;
     }
     $self_url=$_SERVER['PHP_SELF'];
     $session_id=SID;
     if(isset($session_id)&&$session_id)
     {
     	$href="$self_url?session_id";
     }
     else
     {
     	$href=$self_url;
     }
     echo "<br><a href=\"$href\">visit us again</a> sometimes"
   ?>


</body>
</html>