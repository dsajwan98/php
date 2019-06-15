<?php 
  if(isset($_POST["submit"]))
  {
    $check=getimagesize($_FILES["image"]["tmp_name"]);
    if($check!==false)
    {
    	$image=$_FILES["image"]["tmp_name"];
    	$imgcontent=addslashes(file_get_contents($image));
    	$servername="localhost";
	   $username="root";
	   $password="";
	   $databaseName="BufferBase";
	   
	   $conn=new mysqli($servername,$username,$password,$databaseName);
	   if($conn->connect_error)
	   {
	   	die("connection failed".$conn->connect_error);
	   }
	   $datetime=date("Y-M-d H:i:s:");
	   $sql=$conn->query("insert into image_log (created_at,image) values('$datetime','$imgcontent')");
	   if($sql)
	   {
	   	echo "File uploaded successfully.";
	   }
	   else
	   {
	   	echo "File upload failed,please try again";
	   }
    }
    else
    {
    	echo "Please select an image file to upload.";
    }

  }

 ?>