<?php require_once "../../../db/mysql.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Danh sách Product</title>
   <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
    <meta charset="utf-8">
</head>
<body>
  <div class="container">
  <div class="row">
    <a class="btn btn-success m-2" href="new.php" role="button">Tạo mới</a>
    <h2 class="m-2">Danh sách Product</h2>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>User ID</th>
        <th>Catalog ID</th>
        <th>Tên</th>
        <th>Ảnh</th>
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
          <td><?php echo $row['user_id']; ?></td>
          <td><?php echo $row['catalog_id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['image']; ?></td>
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
</body>
</html>