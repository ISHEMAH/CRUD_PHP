<?php

include 'connection.php';


if(isset($_POST['submit'])){
    $first_name= $_POST['Firstname'];
    $last_name= $_POST['Lastname'];
    $email= $_POST['Email'];
    $password= $_POST['password'];
    $gender = $_POST['gender'];
    $sql="INSERT INTO user(Fname,Lname,email,password,gender) VALUES ('$first_name','$last_name','$email','$password','$gender')";
    $result = $conn->query($sql);
    if ($result == true){
        echo 'New RECORD created successfully';
    }else{
        echo 'Error:'.$sql.'<br>'.$conn->error;
    }
    $conn->close();
}
?>

<html>

<a href='signup.html'><br><br>back</a>
<a href="read.php"><br><br>View record from database</a>

</html>