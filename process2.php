<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="register";

try{
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
    header("Refresh:1; url=index.php");
    // echo("successful in connection");
}catch(mysqli_sql_Exception $ex){
    echo("error in connection");
}

if(isset($_POST['submit'])){ 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dateofbirth = $_POST['dateofbirth'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];


    $register_query="INSERT INTO `user`(`firstname`, `lastname`, `dateofbirth`, `gender`, `username`, `email`, `password`, `confirmpassword`) VALUES ('$firstname','$lastname','$dateofbirth','$gender','$username','$email','$password','$confirmpassword')";
    try{
        $register_result=mysqli_query($conn,$register_query);
        if($register_result){
            if(mysqli_affected_rows($conn)>0){
                echo(" registration successful you will be redericted to login page! ");
            }else{
                echo("error in registration");
            }
        }
    }catch(Exception $ex){
        echo("error".$ex->getMessege());
    }

}
?>