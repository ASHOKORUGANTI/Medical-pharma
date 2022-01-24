
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
  <title>Medicalpharmapage_Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <h1><a href="mainclone.php" class="text-center"><b>E-Pharmacy</b>-LTE</a></h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="process2.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="firstname" class="form-control" placeholder="Firstname" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="lastname" class="form-control" placeholder="Lastname" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="date" name="dateofbirth" class="form-control" placeholder="Date of Birth" max="2020-12-31" required autofocus>
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
<p><u>Gender</u></P>
        <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" value="Male">
                          <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" checked value="Female">
                          <label class="form-check-label">Female</label>
                        </div>
                      </div>
                    </div>


        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
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
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="index.php" class="text-center">I already have a membership</a>
      <a href="forgot.php" class="text-center">Forgot password</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
