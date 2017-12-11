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
      .mytop li:nth-child(3) .mya{
        opacity: 1 !important;
        border: 1px solid #fff;
      }
    </style>
  </head>
  <body>
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
            <div>
              <h2>Lời nhắn đến khách hàng</h2>
              <p>Nếu có bất cứ câu hỏi, nhận xét, nguyện vọng về sản phẩm bạn muốn hay loại sản phẩm bạn muốn tham khảo, bạn cứ nói với chúng tôi. Chúng tôi sẽ ra xử lý. Nếu có nguyện vọng muốn hợp tác hay tổ chức nhóm riêng, bạn cũng hãy liên  lạc với chúng tôi. Mong tin bạn. Thương nhiều. Kí tên - HaiVoL Shop.</p>
              <h2>Địa chỉ</h2>
              <p>10 Nguyễn Huệ, Phường Phú Hội, Tỉnh Thừa Thiên Huế</p>
              <h2>Email</h2>
              <p>chuacoemail@gmail.com</p>
              <h2>Điện thoại</h2>
              <p>01688611680 (VIETTEL) - 01299752012 (VINA)</p>
              <h2>Thời gian làm việc</h2>
              <p>Hầu như chúng tôi không ngủ. OT :))<br>We almost never sleep. For real. <br></p>
            </div>
            <div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3408.8936259290635!2d107.58807095393026!3d16.45761869309438!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a147ba6bdbff%3A0x2e605afab4951ad9!2sHue+Industrial+College!5e0!3m2!1sen!2s!4v1512983210158" width="950" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
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