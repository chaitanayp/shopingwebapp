<?php
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$message=$_POST['message'];

$conn = new mysqli('localhost','root','','login');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(fullname,email,message)values(?,?,?)");
    $stmt->bind_param("sss",$fullname,$email,$message);
    $stmt->execute();
    echo"registration successfully";
    $stmt->close();
    $stmt->close();
}
?>