<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login LMS</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" type="image/x-icon" href="img/fitrah.png">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class=" bg-primary">
  <div class="container">
    <div class="login-box">

      <div class="login-box-body">

        <div class="text-center"> <img src="img/fitrah.png" style="max-width:20%;">
          <br>

          <span style="color: Black;">
            <center>
              <h4><B>SMPIT Al-Fitrah</B></h4>
            </center>
          </span></p>
          <span style="color: green;">
            <center>
              <h5>Masukkan Username dan Password Anda</h5>
            </center>
          </span></p>

          <form method="post" action="login_proses">
            <?= csrf_field(); ?>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" placeholder="Username" name="username" required="required" autocomplete="off">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" placeholder="Password" name="password" required="required" autocomplete="off">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <div class="col-xs-offset-8 col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>



    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>