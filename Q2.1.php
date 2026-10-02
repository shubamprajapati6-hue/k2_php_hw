<?php
    $servername="localhost";
    $usesrname="root";
    $password="";
    $dbname="k2";

    $conn=new mysqli($servername,$usesrname,$password,$dbname);
    if (!$conn) {
        echo  "do not connrct";
    } else {
        echo "connect";
    }
    
?>