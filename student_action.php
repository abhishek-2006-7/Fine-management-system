<?php
$con=mysqli_connect("localhost","root","password","fine_type");
   
   $roll=$_POST["txtroll"];  
   
   $name=$_POST["txtname"];  
   
   $dept=$_POST["txtdept"];
   
   $sem=$_POST["txtsem"];
   
   $batch=$_POST["txtbatch"];
   
   $result=mysqli_query($con,"insert into student_reg(rollno,name,dept,sem,batch)values('$roll','$name','$dept','$sem','$batch')");
   if($result==1)
   {
   echo"<script>
   		alert('Student Details Saved Successfully');
   		window.location='student_reg.php'
         </script>";
   }      
   else
   {
   echo"<script>
   		alert('Failed');
   		window.location='student_reg.php'
         </script>";
   }
   
?>
