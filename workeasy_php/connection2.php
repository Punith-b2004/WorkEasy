<?php
   $servername="localhost";
   $username="root";
   $password="";
   $dbname="selectform";
   $conn=mysqli_connect($servername,$username,$password,$dbname);
   if($conn)
   {
// echo "connection ok";
   }
   else
   {
   	echo "connection fail".mysqli_connect_error;
   }
?>