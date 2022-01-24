<?php
//session_start();
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

$Order_id=$_POST['Order_id'];

// echo $username;
// echo "<br>";
// echo $email;

$sql="SELECT * FROM `userorder` WHERE Order_id='$Order_id'";

$sql1="SELECT * FROM `ordermanager` WHERE Order_id='$Order_id'";

$result= mysqli_query($conn,$sql);
$result1= mysqli_query($conn,$sql1);
if($Order_id==""){
    header('location:orderdetails.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
  body{
    margin:0;
    padding:0;
    font-family:sans-serif;
  }
.cont {
  position: relative;
  width:1200px;
  height:30px;
  margin:240px auto;
}
.cont .box{
  position:relative;
  width: calc(400px - 30px);
  height: calc(300px - 30px);
  background:#000;
  float:left;
  margin:15px;
  box-sizing:border-box;
  overflow:hidden;
  border-radius:10px;
}
.centered{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%, -50%); 
}
h4{
  border-style:solid;
  border-color:gray;
}
h6{
  border-style:solid;
  border-color:gray;
}
.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}
.button {
  background-color: #000080;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button5 {border-radius: 50%;}
</style>

<title>Pharma &mdash; Orderdetails</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">


</head>

<body>

<div class="site-wrap">

    <?php require 'nav.php' ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="ash.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Order-Details</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
  <div class="container">
    <div class="row">
      <div class="title-section text-center col-12">
        <h2 class="text-uppercase">Order-Details</h2>
      </div>
    </div>





    <table align="center" border="1px" style="width:1000px; line-height=40px;">
<tr>
    <th colspan="4"><h2>Order-details</h2></th>
</tr>
<tr>
    <th>Order_id</th>
    <th>Item Name</th>
    <th>Item Quantity</th>
    <th>Item Price</th>
    <!-- <th>Item Quantity</th>
    <th>Item Price</th> -->

</tr>
<?php
while($rows=mysqli_fetch_array($result)){
    ?>

    <tr>
    <td><?php echo $rows['Order_id'];?></td>
    <td><?php echo $rows['item_name'];?></td>
    <td><?php echo $rows['item_quantity'];?></td>
    <td>&#8377;<?php echo $rows['item_price'];?></td>
</tr>
<?php
}
?>

</table>
<br><br><br>

<!-- cost details -->

<table align="center" border="1px" style="width:1000px; line-height=40px;">
<tr>
    <th colspan="9"><h2>Customer-details</h2></th>
</tr>
<tr>
    <th>Order_id</th>
    <th>Full Name</th>
    <th>E-mail</th>
    <th>Full Address</th>
    <th>Country</th>
    <th>City</th>
    <th>State</th>
    <th>Pincone</th>
    <th>Ph.No</th>
    <!-- <th>Item Quantity</th>
    <th>Item Price</th> -->

</tr>
<?php
while($rows1=mysqli_fetch_array($result1)){
    ?>

    <tr>
    <td><?php echo $rows1['Order_id'];?></td>
    <td><?php echo $rows1['full_name'];?></td>
    <td><?php echo $rows1['email'];?></td>
    <td><?php echo $rows1['full_address'];?></td>
    <td><?php echo $rows1['full_country'];?></td>
    <td><?php echo $rows1['full_city'];?></td>
    <td><?php echo $rows1['full_state'];?></td>
    <td><?php echo $rows1['full_pin'];?></td>
    <td><?php echo $rows1['full_number'];?></td>
</tr>
<?php
}
?>

</table>
<br><br><br>
  <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
  <div class="container">
    <div class="row align-items-stretch">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <a href="" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
          <div class="banner-1-inner align-self-center">
            <h2>Pharma Products</h2>
            <p>Made in India, For the India
            </p>
          </div>
        </a>
      </div>
      <div class="col-lg-6 mb-5 mb-lg-0">
        <a href="" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
          <div class="banner-1-inner ml-auto  align-self-center">
            <h2>Rated by Experts</h2>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

        <div class="block-7">
          <h3 class="footer-heading mb-4">About Us</h3>
          <p>The pain itself is a lot of pain, but the main adipisic Rejecting the distinction between pleasures but to receive them by the right of pain and symptoms,Pharma provides best option for you.</p>
        </div>

      </div>
      
      <div class="col-md-6 col-lg-3">
        <div class="block-5 mb-5">
          <h3 class="footer-heading mb-4">Contact Info</h3>
          <ul class="list-unstyled">
            <li class="address">1-9-1122/1,Vidyanagar,Hyd-44</li>
            <li class="phone">+040-29561048</a></li>
            <li class="email">pharma@gmail.com</li>
          </ul>
        </div>


      </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
      <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>document.write(new Date().getFullYear());</script> All rights reserved | @PHARMA
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>

    </div>
  </div>
</footer>

</div>


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

</body>
</html>