<?php
   $state1[0]="Delhi";
   $state1[1]="Uttarakhand";
   $state1[2]="Punjab";
   for($i=0; $i<3;$i++)
   {
   	echo $state1[$i]."<br>";
   }
   $state2[]="Goa";
   $state2[]="Bihar";
   $state2[]="UP";
   for($i=0; $i<3;$i++)
   {
   	echo $state2[$i]."<br>";
   }
   $state[1]="UT";
   $state["cross"]="blank";
   $state[2.7]="sdfj";
   foreach ($state as $st) {
   	echo $st."<br>";
   }
   print_r($state);
?>