<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../check-login.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Danh sach tin nhắn</title>
  <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  <meta charset="utf-8">
</head>
<body>
  <?php include "../../menucon.php" ?>
  <div class="container">
  <div class="row">
    <!-- <a class="btn btn-success m-2" href="../../contact.php" role="button">Tạo mới</a> -->
    <h2 class="m-2">Danh sách tin nhắn</h2>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Sdt</th>
        <th>Email</th>
        <th>Msg</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $sql = "select * from msg order by id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['sdt']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['msg']; ?></td>
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