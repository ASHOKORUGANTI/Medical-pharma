
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash;</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body class="hold-transition register-page">

  <div class="site-wrap">


    <div class="site-navbar py-2">
    <?php require 'nav.php' ?>

    </div>

    <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="ash.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Name</th>
                    <th class="product-Quantity">Quantity</th>
                    <th class="product-price">Price</th>
                    <th class="product-total">Total</th>
                    <th class="product-total">Action</th>
                  </tr>
                </thead>


                <?php
                $total=0;
        if(!empty($_SESSION["shopping_cart"]))
        {
          $total=0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
        ?>
        <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"]; ?></td>
            <td><?php echo $values["item_price"]; ?></td>
            <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
            <td><a href="manage_cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>

    </tr>
    <?php
            $total = $total + ($values["item_quantity"] * $values["item_price"]);

            
        }

    } 

    ?>
    <tr>
      <td colspan="3" align="right"><div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Total</h3>
                  </div></td>
      <td align="right">&#8377;<?php echo number_format($total, 2); ?></td>
      <td></td>
  </tr>

              </table>
            </div>
          </form>
        </div>


<!--Checkout details -->

        <div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <!-- <h1><b>Checkout</b>-Details</h1> -->
    </div>
    <div class="card-body">
      <?php
      if(isset($_SESSION['shopping_cart']) && count($_SESSION['shopping_cart'])>0){
      ?>
      <form action="purchase.php" method="post">
      <p class="login-box-msg"><h1><b>Checkout</b>-Details</h1></p>

        <div class="input-group mb-3">
          <input type="text" name="full_name" class="form-control" placeholder="Fullname" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Example@email.com" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="full_address" class="form-control" placeholder="Address" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>


        <!-- <div class="input-group mb-3">
          <input type="text" name="gender" class="form-control" placeholder="Male/Female" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div> -->


        <div class="input-group mb-3">
          <input type="text" name="full_country" class="form-control" placeholder="Country" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="full_city" class="form-control" placeholder="City" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="full_state" class="form-control" placeholder="State" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="number" name="full_pin" class="form-control" placeholder="Pincode" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" name="full_number" class="form-control" placeholder="Ph.No" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

          <!-- /.col -->
          <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" name="checkout_full">Proceed To
                      Checkout</button>
                  </div>
                </div>
          <!-- /.col -->
        </div>
      </form>
      <?php
      }
      ?>
    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.card -->
</div>

<!--Checkout details -->




        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <!-- <button class="btn btn-primary btn-md btn-block">Update Cart</button> -->
              </div>
              <div class="col-md-6">
                <!-- <button class="btn btn-outline-primary btn-md btn-block">Continue Shopping</button> -->
              </div>
            </div>

          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  
                </div>
                </div>
                <div class="row mb-5">
                  
            
                </div>
    
                <div class="row">
                  <div class="col-md-12">
                    <!-- <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.html'">Proceed To
                      Checkout</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Made in India, For the India
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
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