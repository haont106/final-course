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
      .mytop li:nth-child(4) .mya{
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
            <form method="post" action="admin/msg/create.php" class="col-lg-12">
              <div>
                <h1>Gửi tin nhắn để liên hệ</h1>
              </div>
              <div class="row mt-2">
                <div class="col-lg-8">
                  <label>Tên:</label>
                  <input class="form-control" type="text" name="name">
                </div>
                <div class="col-lg-4">
                  <label>SĐT:</label>
                  <input class="form-control" type="number" name="sdt">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-lg-12">
                  <label>Mail:</label>
                  <input class="form-control" type="email" name="email">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-lg-12">
                  <label>Tin nhắn:</label>
                  <textarea class="form-control" name="msg" rows="6"></textarea>
                </div>
              </div>
              <!-- <div class="row mt-2 ml-1">
                <div class="col-lg-12">
                  <input type="checkbox" name="20GG" value="OK"> Tôi đồng ý chấp thuận các <a href="#">điều khoản</a> khi gửi tin nhắn
                </div>
              </div> -->
              <br>
              <div class="row">
                <div class="col-lg-12">
                  <button class="btn btn-success col-lg-12">Đồng ý và gửi đi</button>
                </div>
              </div>
              
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
<?php unset($_SESSION["flash"]); ?>