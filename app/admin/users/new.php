<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tạo mới User</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
    <meta charset="utf-8">
  </head>
  <body>
  <div class="wrapper">
    <form method="post" action="create.php">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>Tạo mới User</h1>
      </div>
      <div class="row">
        <label>Tên User:</label>
        <input class="form-control" type="text" name="name">
      </div>
      <div class="row">
        <label>Email:</label>
        <input class="form-control"  type="email" name="email">
      </div>
      <div class="row">
        <label>Mật khẩu:</label>
        <input class="form-control"  type="password" name="password">
      </div>
      <div class="row">
        <label>Lặp lại mật khẩu:</label>
        <input class="form-control"  type="password" name="repassword">
      </div>
      <div class="row">
        <label>Quyền:</label>
        <select class="form-control" name="role">
          <option value="2">User</option>
          <option value="1">Editor</option>
          <option value="0">Admin</option>
        </select>
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