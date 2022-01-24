<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="register";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// if($conn->connect_error){
//     echo "ERROR-404";
// }else{
//     echo "connected";
// }

$username=$_POST['username'];
$password=$_POST['password'];

$_SESSION['name']=$username;
// echo $username;
// echo $password;
$sql="SELECT * FROM user WHERE username= '$username' AND password='$password'";
$result= mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if($username=="" && $password==""){
    header('location:index.php');
    
}
if($row['username']==$username && $row['password']==$password){
    // echo "Welcome ".$username." you are successfully Logged in!";
    echo "<script>location.replace('ash.php')</script>";
}else{
    echo "<script>alert('Check your credentials')</script>";
    echo "<script>location.replace('index.php')</script>";
}
?>
