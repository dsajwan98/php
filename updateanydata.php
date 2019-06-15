<!DOCTYPE html>
<html>
<head>
   <title></title>
</head>
   <body>
    <form method="post" action="updateshow.php">
       <table align="center" bgcolor="yellow">
         <tr>
            <td border="1" align="center"><h1>Employees Data</h1></td>
         </tr>
         <tr>
            <td>
               <table border="1" align="center" bgcolor="white"></table>
                  <tr>
                     <td>Id</td>
                     <td>Name</td>
                     <td>Email</td>
                  </tr>
                  <?php  
                     $servername="localhost";
                     $username="root";
                     $password="";
                     $databaseName="BufferBase";
                     $id=$_POST["sid"];
                     $conn=new mysqli($servername,$username,$password,$databaseName);
                     if($conn->connect_error)
                     {
                        die("connection failed".$conn->connect_error);
                     }
                     $sql="select * from profile_data where id=$id";
                     $result=$conn->query($sql);
                     $s="not found";
                     if($result->num_rows >0)
                     {
                        while($row=$result->fetch_array())
                        {
                           echo("<tr><td><b><input type='text' name='txt0' value='$row[0]'></b></td><td><b><input type='text' name='txt1' value='$row[1]'></b></td><td><b><input type='text' name='txt2' value='$row[2]'></b></td></tr>");
                        }
                     }
                     else
                        echo("<tr><td><b>$s</b></td><td><b>$s</b></td><td><b>$s</b></td></tr>");
                  ?>
               </table>
            </td>
         </tr>
     </table>
      <input type="submit" name="btnUpdate">
    </form>
     
   </body>
</html>
