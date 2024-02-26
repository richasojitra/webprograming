<?php
$user=$_REQUEST['user_name'];
$pass=$_REQUEST['password'];

$connect=mysqli_connect("localhost","root","","b1");
//print_r($connect);
echo $query="INSERT INTO `register`(`user_nm`,`passs`) VALUES ('$user','$pass')";
echo $exe_query=mysqli_query($connect,$query);
?>