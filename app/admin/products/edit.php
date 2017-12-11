<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../check-login.php"; ?>
<?php
  if(!isset($_GET["id"])){
    $_SESSION["flash"] = "Wrong params";
    header("location: index.php");
  }

  $id = $_GET["id"];
  $sql = "select * from products where id=$id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $user_id = $row["user_id"];
  $catalog_id = $row["catalog_id"];
  $name = $row["name"];
  $description = $row["description"];
  $image = $row["image"];
  $img2 = $row["img2"];
  $qty = $row["qty"];
  $price = $row["price"];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Chỉnh sửa product</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
    <meta charset="utf-8">
  </head>
  <body>
  <?php include "../../menucon.php" ?>
  <div class="wrapper">
    <form method="post" action="update.php">
      <input type="hidden" value="<?php echo $id; ?>" name="id">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>Chỉnh sửa product</h1>
      </div>      
      <div class="row">
        <label>Tên:</label>
        <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
      </div>
      <div class="row">
        <label>Ảnh:</label>
        <input class="form-control" type="text" name="image" value="<?php echo $image; ?>">
      </div>
      <div class="row">
        <label>Banner:</label>
        <input class="form-control" type="text" name="img2" value="<?php echo $img2; ?>">
      </div>
      <div class="row">
        <label>Mô tả:</label>
        <textarea class="form-control" name="description"><?php echo $description; ?></textarea>
      </div>      
      <div class="row">
        <label>Số lượng:</label>
        <input class="form-control" type="text" name="qty" value="<?php echo $qty; ?>">
      </div>
      <div class="row">
        <label>Giá:</label>
        <input class="form-control" type="text" name="price" value="<?php echo $price; ?>">
      </div>
      <div class="row">
        <label>User:</label>
        <select class="form-control" name="user_id">
          <?php
            $sql = "select * from users";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){ ?>
                  <option <?php if($user_id == $row['id']) echo 'selected=true'; ?> value="<?php echo $row['id']; ?>"><?php echo $row["name"]; ?></option>
          <?php    }
            }
          ?>
        </select>
      </div>
      <div class="row">
        <label>Danh mục:</label>
        <select class="form-control" name="catalog_id">
          <?php
            $sql = "select * from catalogs";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){ ?>
                  <option <?php if($catalog_id == $row['id']) echo 'selected=true'; ?> value="<?php echo $row['id']; ?>"><?php echo $row["name"]; ?></option>
          <?php    }
            }
          ?>
        </select>
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary mb-3">Đồng ý</button>
        <a class="btn btn-secondary mb-3 ml-3" href="index.php" role="button">Trở về</a>
      </div>
    </form>
  </div>
  <script src="../../../public/js/jquery.min.js"></script>
  <script src="../../../public/js/bootstrap.min.js"></script>
  <script src="../../../public/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>
