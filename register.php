<?php

require 'connect.php';
$name=$_POST['name'];
$username=$_POST['username'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$password=$_POST['password'];

$checkUser="SELECT * from user_register WHERE email='$email'";
$checkQuery=mysqli_query($conn,$checkUser);

if(mysqli_num_rows($checkQuery)>0){

     $response['error']="403";
    $response['message']="User exist";
}
else
{

$insertQuery="INSERT INTO user_register(name,username,contact,email,password) VALUES('$name','$username','$contact','$email','$password')";
$result=mysqli_query($conn,$insertQuery);

if($result){

    $response['status_code']="1";
    $response['status']="success";
    $response['message']="Register successful!";
}
else
{
    $response['status_code']="0";
    $response['status']="error";
    $response['message']="Registeration failed!";
}
}

echo json_encode($response)


?>