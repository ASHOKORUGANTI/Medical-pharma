<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="register";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// if($conn->connect_error){
//     echo "ERROR-404<br>";
// }else{
//     echo "connected<br>";
// }

$username=$_POST['username'];
$email=$_POST['email'];

// echo $username;
// echo "<br>";
// echo $email;

$sql="SELECT * FROM `user` WHERE username='$username' AND email='$email'";
$result= mysqli_query($conn,$sql);
if($username=="" && $email==""){
    header('location:forgot.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
    <style>

body {
  background-image: url('pharmac.jfif');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  animation: slide 10s infinite;
}
@keyframes slide{
    25%{
        background-image: url('photo-1617881770125-6fb0d039ecde.png');
    }
    50%{
        background-image: url('20378251.jpg');
    }
    75%{
        background-image: url('899156.jpg');
    }
    /* 100%{
        background-image: url('pharmac.jpg');
    } */
}
</style>
        <title>username_email_password</title>
</head>
<body>
    <table align="center" border="1px" style="width:1000px; line-height=40px;">
<tr>
    <th colspan="3"><h2>Account details</h2></th>
</tr>
<tr>
    <th>Username</th>
    <th>E-mail</th>
    <th>Password</th>
</tr>
<?php
while($rows=mysqli_fetch_array($result)){
    ?>

    <tr>
    <td><?php echo $rows['username'];?></td>
    <td><?php echo $rows['email'];?></td>
    <td><?php echo $rows['password'];?></td>
</tr>
<?php
}
?>
<button><a href="index.php">Go to login page</a></button>

</table>
</body>
</html>