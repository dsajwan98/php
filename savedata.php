<?php  
   $servername="localhost";
   $username="root";
   $password="";
   $databaseName="BufferBase";
   $id=$_POST['txtId'];
   $name=$_POST['txtName'];
   $emailid=$_POST['txtEmail'];
   $conn=new mysqli($servername,$username,$password,$databaseName);
   if($conn->connect_error)
   {
   	die("connection failed".$conn->connect_error);
   }
   $sql="insert into profile_data (id,name,emailid) values('$id','$name','$emailid')";
   if($conn->query($sql)==TRUE)
   {
   	echo "new record created successfully";
   }
   else
   {
   	echo "error".$sql."<br>".$conn->error;
   }
   $conn->close();
?>