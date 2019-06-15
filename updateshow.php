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
   $sql="update profile_data set id='$id',name='$name',emailid='$emailid' where id='$id";
   if($conn->query($sql)==TRUE)
   {
   	echo "record updated successfully";
   }
   else
   {
   	echo "error".$sql."<br>".$conn->error;
   }
   $conn->close();
?>