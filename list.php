
<!DOCTYPE html>
<html>
<head>
	<title>Learning lists</title>
</head>
<body bgcolor="Yellow">
   <?php
     $arrayName = range("D", "F");
     list($a,$b,$c)=$arrayName;
     array_unshift($arrayName, "A","B","C");
     array_push($arrayName,"G","H","I");
     foreach ($arrayName as $key => $value) {
     	echo "$key=> $value<br>";
     }
   ?>
</body>
</html>
