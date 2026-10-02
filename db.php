<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="k2";

 $conn=new mysqli($servername,$username,$password,$dbname);
 if (!$conn) {
    echo "fialed to connect";
 } else {
    echo "connect";
 }
 
?>