
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

    <?php require 'nav2.php' ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="ash.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Order-Details</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
  <div class="container">
      <br><br>

    <body >
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <h5>Dear <U><?php echo $_SESSION['name'];?></U> Thankyou for shopping with PHARMA Your order number is <strong><u><i><?php echo $_SESSION['confirm'];?></i></u> </strong> Enter your order number in above order details to view your order</h5>
    </div>


<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Thank you!</h2>
            <p class="lead mb-5">You order was successfuly completed.</p>
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