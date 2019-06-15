<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   <table>
   	<tr>
   	  <td width="159">Name</td>
   	  <td width="108"><input type="text" name="txtName"></td>		
   	</tr>
   	 <tr>
   	  <td width="159">Email</td>
   	  <td width="108"><input type="text" name="txtEmail"></td>		
   	</tr>
   	<tr>
   	  <td width="159">Mobile</td>
   	  <td width="108"><input type="text" name="txtMobile"></td>		
   	</tr>
   	<tr>
   	  <td width="159">Address</td>
   	  <td width="108"><input type="textArea" name="txtaAddress"></td>		
   	</tr>
   	<tr>
      <td></td>
      <td><input type="submit" name="btnSubmit">></td>
    </tr>

   </table>

   <?php 
       if(isset($_REQUEST['save']))
       {
       	$array=$_REQUEST['arr'];
       	
       }
   ?>
</body>
</html>