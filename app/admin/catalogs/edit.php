<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php
  if(!isset($_GET["id"])){
    $_SESSION["flash"] = "Wrong params";
    header("location: index.php");
  }

  $id = $_GET["id"];
  $sql = "select * from catalogs where id='$id'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $name = $row["name"];
  $description = $row["description"];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Chỉnh sửa danh mục</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  </head>
  <body>
  <div class="wrapper">
    <form method="post" action="update.php">
      <input type="hidden" value="<?php echo $id; ?>" name="id">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>Chỉnh sửa danh mục</h1>
      </div>
      <div class="row">
        <label>Tên:</label>
        <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
      </div>
      <div class="row">
        <label>Mô tả:</label>
        <textarea class="form-control" name="description" placeholder="<?php echo $description; ?>"></textarea>
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