<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../check-login.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Danh sách Product</title>
   <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
    <meta charset="utf-8">
</head>
<body>
  <?php include "../../menucon.php" ?>
  <div class="container">
  <div class="row">
    <a class="btn btn-success m-2" href="new.php" role="button">Tạo mới</a>
    <h2 class="m-2">Danh sách Product</h2>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>User</th>
        <th>Danh mục</th>
        <th>Ảnh</th>
        <th>Banner</th>
        <th>Mô tả</th>
        <th>SL</th>
        <th>Giá</th>
        <th>#</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $sql = "select * from products";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php switch ($row['user_id']) {
            case 2:
              echo "User 02";
              break;
            case 3:
              echo "User 03";
              break;
            case 4:
              echo "User 04";
              break;
            case 5:
              echo "admin";
              break;
          }; ?>
          <td><?php switch ($row['catalog_id']) {
            case 1:
              echo "Huyền thoại";
              break;
            case 2:
              echo "Sử thi";
              break;
            case 3:
              echo "Siêu phẩm";
              break;
            case 4:
              echo "Giả lập";
              break;
            case 5:
              echo "Apple";
              break;
            case 6:
              echo "Samsung";
              break;
          }; ?>
          <td><?php echo $row['image']; ?></td>
          <td><?php echo $row['img2']; ?></td>
          <td><?php echo $row['description']; ?></td>
          <td><?php echo $row['qty']; ?></td>
          <td><?php echo $row['price']; ?></td>
          <td><a href="Edit.php?id=<?php echo $row["id"];?>">Sửa</a></td>
          <td><a href="delete.php?id=<?php echo $row["id"];?>">Xóa</a></td>
        </tr>
    <?php  }
    }
     ?>       
    </tbody>
  </table>
</div>
<script src="../../../public/js/jquery.min.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
<script src="../../../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>