<?php
    session_start();
	unset($_SESSION['emailid']);
	header("location:login pg.html");
?>
