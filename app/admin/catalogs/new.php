<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tạo mới danh mục</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  </head>
  <body>
  <div class="wrapper">
    <form method="post" action="create.php">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>Tạo mới danh mục</h1>
      </div>
      <div class="row">
        <label>Tên:</label>
        <input class="form-control" type="text" name="name">
      </div>
      <div class="row">
        <label>Mô tả:</label>
        <textarea class="form-control" name="description"></textarea>
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary">Đồng ý</button>
        <a class="btn btn-secondary ml-3" href="index.php" role="button">Trở về</a>
      </div>
    </form>
  </div>
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>