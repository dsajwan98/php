<?php
  print("Example of static variable<br>");
  function a()
  {
  	static $b=0;
    $b++;
    echo $b."<br>";
  }
  a();
  a();
  a();
  print("example of non static variable<br>");
  function b()
  {
  	$d=0;
  	$d++;
  	echo $d."<br>";
  }
  b();
  b();
  b();
?>