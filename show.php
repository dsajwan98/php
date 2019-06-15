<?php 
   $name=$_POST['name'];
   $age=$_POST['age'];
   switch ($name) {
   	case '$name':
   		echo "Your name is: $name <br>";
   		break;
   	case 'Vijay':
   		echo "Your name is: $name <br>";
   		break;
    case 'Sanjay':
    	echo "Your name is: $name <br>";
    	break;
   	default:
   		echo "Invalid name";
   		break;
   }
   switch ($age) {
   	case 40:
   		echo "Your age is $age";
   		break;
   	case 50:
   		echo "Your age is $age";
   		break;
   	default:
   		echo "You are not born yet";
   		break;
   }
 ?>