<?php require_once "../../../db/mysql.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Danh sach User</title>
  <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  <meta charset="utf-8">
</head>
<body>
  <?php include "../../menucon.php" ?>
  <div class="container">
  <div class="row">
    <a class="btn btn-success m-2" href="new.php" role="button">Tạo mới</a>
    <h2 class="m-2">Danh sách User</h2>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Quyền</th>
        <th>#</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $sql = "select * from users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php switch ($row['role']) {
            case 0:
              echo "Admin";
              break;
            case 1:
              echo "Editor";
              break;
            case 2:
              echo "User";
              break;
          }; ?>            
          </td>
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