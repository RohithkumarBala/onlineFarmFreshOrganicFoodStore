
<?php

session_start();

$con = mysqli_connect('localhost' , 'root' , '');

mysqli_select_db($con, 'productdb');


$username = $_POST['username'];
$emaiid = $_POST['emaiid'];
$password = $_POST['password'];
       

$s = "select * from registration where username ='$username' && password = '$password' " ;

$result = mysqli_query($con, $s);
 
$num =mysqli_num_rows($result);

if($num==1) {
    header("location:mainpage.html"); }
else{
    header("location:login pg.html");}


?>
