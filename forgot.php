<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medicalpharmapage_Forgotpassword</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <h1><a href="mainclone.php" class="text-center"><b>E-Pharmacy</b>-LTE</a></h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">You are only one step a way to recover your password now.</p>


      <form action="process3.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Example@email.com">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Recover password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="index.php">I already have a membership</a><br>
        <a href="register.php">Register a new membership</a>

      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
