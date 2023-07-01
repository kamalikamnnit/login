<?php
session_start();
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}

else{
    echo "no connection";
}

mysqli_select_db($con,'sessionpractical');

$username = $_POST['username'];
$password =$_POST['password'];

$q = "select * from signin username = '$username' && password = '$password'";

$result =mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1)
{
echo "duplicate data";
}

else{
    $qy = "insert into signin(username,password)values('$username','$password')";
    mysqli_query($con,$qy);
}

?>