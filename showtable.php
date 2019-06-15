<style="font-family:arial;color:red;font_size:20px">
<?php
   $number=$_POST['txtnum'];
   if(filter_var($number,FILTER_VALIDATE_INT)==false)
   	echo "Invalid integer, Kindly enter a number that you read in nursery";
   else
   {
   	printf("<b>The table of %d is as follows:</b>",$number);
   	for($i=1;$i<600000;$i++)
   		printf("<center><b>%d * %d =%d</b></center>",$number,$i,$number*$i);
   }
 ?>