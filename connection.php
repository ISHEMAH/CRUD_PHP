<?php

$servername='localhost';
$dbname='Student_db';
$username='root';
$password='';

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn ->connect_error) {
  exit("connection error".$conn->connect_error);
}else{
    echo"connetion successful";
}


?>