<?php
   // example of function parameter
   print("<b>Example of function parameter</br>");
   $x=4;
   function assignx()
   {
   	$x=0;
   	printf("\$x inside function is %d <br>",$x);
   }
   assignx();
   printf("\$x outside function is %d <br>",$x);
?>