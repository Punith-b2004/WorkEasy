<?php
   $servername="localhost";
   $username="root";
   $password="";
   $dbname="login2form";
   $conn=mysqli_connect($servername,$username,$password,$dbname);
   if($conn)
   {
     // echo "connectionok";
   }
   
   else
   {
   	echo "connection fail".mysqli_connect_error;
   }
?>