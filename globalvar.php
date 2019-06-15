<?php
  print("Example of global variable<br>");
  $a=15;
  function b()
  {
    global $a;
    $a++;
    echo "variable is $a<br>";
    printf("variable is \$a");
  }
  b();
  print("Example of global variable through php's another method<br>");
  $a=15;
  function c()
  {
   $GLOBALS["a"]++;
  }
  c();
  echo "variable is".$GLOBALS["a"];
?>