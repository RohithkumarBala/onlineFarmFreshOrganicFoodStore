
 <?php
   session_start();
     $con = mysqli_connect('localhost','root','');
     mysqli_select_db($con,'userregistration');
     $name = $_POST['username'];
     $mail = $_POST['emailid'];
     $pass = $_POST['password'];
    $s = "SELECT * from usertable where username='$name'";
      $result = mysqli_query($con,$s);
      $num = mysqli_num_rows($result);
    if($num == 1){
      echo"username already exists";
    }else
      {
        $reg = "INSERT INTO usertable(username,emailid,password). values('$name','$mail','$pass')";
        mysqli_query($con,$reg);
          echo"registration successfull";
      }
      
     
 ?>
