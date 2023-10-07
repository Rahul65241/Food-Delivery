<?php

require 'connect.php';
$username=$_POST['username'];
$password=$_POST['password'];

$checkUser="SELECT * from user_register WHERE username='$username' and password='$password' ";
$checkQuery=mysqli_query($conn,$checkUser);

if(mysqli_num_rows($checkQuery)>0){

    $response['status_code']="1";
    $response['message']="Login Successfull";
}

else{
    $response['status_code']="0";
    $response['message']="User not Exist";

}

echo json_encode($response)

?>