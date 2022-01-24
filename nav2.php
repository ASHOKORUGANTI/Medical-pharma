<?php
session_start();

?>

<div class="site-navbar py-2">

  <!-- <div class="search-wrap">
    <div class="container">
      <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
      <form action="#" method="post">
        <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
      </form>
    </div>
  </div> -->
  <li class="active">Welcome<u>(<?php echo $_SESSION['name'];?>)</u></li>
  <div class="container">
    <div class="d-flex align-items-center justify-content-between">
      <div class="logo">
        <div class="site-logo">
          <a href="ash.php" class="js-logo-clone">Pharma</a>
        </div>
      </div>
      <div class="main-nav d-none d-lg-block">
        <nav class="site-navigation text-right text-md-center" role="navigation">
          <ul class="site-menu js-clone-nav d-none d-lg-block">
            <li class="active"><a href="ash.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="orderdetails.php">Order-Details</a></li>
          </ul>
        </nav>

      </div>
      
      <div class="icons">
        <!-- <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a> -->
        <a href="mycart.php" class="icons-btn d-inline-block bag">
          <span class="icon-shopping-bag"></span>
          <span class="number">0</span>
        </a>
        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
            class="icon-menu"></span></a>
      </div>
    </div>
  </div>
</div>