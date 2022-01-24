<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('User successfully loggedout')</script>";
    echo "<script>location.replace('mainclone.php')</script>";
// $_SESSION=array();
// header("location:mainclone.php");

?>