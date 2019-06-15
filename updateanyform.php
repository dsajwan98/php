<!DOCTYPE html>
<html>
<head>
	<title>Update any data</title>
</head>
<body>
 <form method="post" action="updateanydata.php">
    Select any Data:
 	<select name="sid">
 		<?php
         
         $servername="localhost";
         $username="root";
         $password="";
         $databaseName="BufferBase";
         
         $conn=new mysqli($servername,$username,$password,$databaseName);
         if($conn->connect_error)
         {
            die("connection failed".$conn->connect_error);
         }
         $sql="select id from profile_data";
         $result=$conn->query($sql);
         $s="not found";
         if($result->num_rows >0)
         {
         	$i=0;
            while($row=$result->fetch_array())
            {

               echo "<option value=$row[0]>$row[0]</option>";
              
            }
         }
         else
            echo $s;
      ?>
 
 		
   	   
   </select>
   <input type="submit" name="btnSubmit">
 </form>	
   
</body>
</html>