<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "lib.php"; ?>
    <style type="text/css">
      .mytop li:nth-child(1) .mya{
        opacity: .7 !important;
        border: 1px solid #22c5a8;
      }
      .mytop li:nth-child(1):hover .mya{
        opacity: .9 !important;
        border: 1px solid #fff;
      }
      .mytop li:nth-child(5) .mya{
        opacity: 1 !important;
        border: 1px solid #fff;
      }
    </style>
  </head>
  <body>
  	<?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?>
    <!-- Navigation -->
    <?php include "menu.php"; ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <?php include "slide-left.php"; ?>
        <!-- /.col-lg-3 -->
        <div class="col-lg-10">
          <?php include "slide.php"; ?>
          <div class="row">            
          	<form method="post" action="login-action.php" class="text-center col-lg-12">
			        <h1 class="form-signin-heading text-muted" style="font-size: 80px">Đăng nhập</h1><br>
              <h2>Email:</h2>
			        <input type="text" name="email" class="form-control text-center" placeholder="Nhập địa chỉ email" required="" autofocus=""><br>
              <h2>Mật khẩu:</h2>
			        <input type="password" name="password" class="form-control text-center" placeholder="Nhập mật khẩu" required=""><br>
			        <button class="btn btn-lg btn-primary btn-block" type="submit">
			            Sign In
			        </button><br>
				    </form>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <?php include "footer.php"; ?>
    <?php include "toolbar.php"; ?>
    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>
  </body>
</html>