<?php
    foreach ($_SERVER as $var => $value) {
    	echo "<b>$var => $value</b><br>";
    }
    printf("Your IP address is: %s",$_SERVER['REMOTE_ADDR']);
?>

