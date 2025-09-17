<?php
   $con=mysqli_connect("localhost","root","password","fine_type");
   $name=$_POST["txttype"];
   $amount=$_POST["txtamount"];
   $result=mysqli_query($con,"insert into tbl_type (fine_type,amount)values('$name','$amount')");
   if($result==1)
   {
   echo"<script>
   		alert('Fine Details Saved Successfully');
   		window.location='fine_type.php'
         </script>";
   }      
   else
   {
   echo"<script>
   		alert('Failed');
   		window.location='fine_type.php'
         </script>";
   }    
   
   $con.close();
?>
