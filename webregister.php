

<?php

session_start();
$_SESSION['message'] = ' ';

$pass = ' ' ;
$name='';



$mysqli = new mysqli('localhost' , 'root' , '' , 'productdb');


if($_SERVER['REQUEST_METHOD'] == 'POST') {




$username = ($_POST['username']);
$emailid = ($_POST['emailid']);
$password = ($_POST['password']);


$_SESSION['name']= $name;

$sql = "INSERT INTO registration (username,emailid,password)" . "VALUES('$username' , '$emailid', '$password ')";

if($mysqli->query($sql) == true){

$_SESSION['message'] ="Registration  succesful! ";
//echo" registered successfully";

header("location: success.html");

}
else{
    //echo"cannotreg";
   //header("location:cannotreg.html");
    echo "<script>alert('username or emailid are alredy exists...!')</script>";
              echo "<script>window.location = 'registration.html'</script>";
   }
}


?>