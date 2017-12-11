<?php
  function validate($name,$sdt,$email){
    if(trim($name) == "" || trim($sdt) == "" || trim($email) == ""){
      $_SESSION["flash"] = "<div class='alert alert-danger alert-dismissable my-alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>!!!!!!!!!! CẢNH BÁO !!!!!!!!!! </strong><br>Tên, số điện thoại hoặc email ko được để trống!</div>";
      return false;
    }
    $sql = "select * from msg where sdt='$sdt'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      $_SESSION["flash"] = "<div class='alert alert-danger alert-dismissable my-alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>!!!!!!!!!! CẢNH BÁO !!!!!!!!!! </strong><br>Đã tồn tại số điện thoại này!</div>";
      return false;
    }
    return true;
  }
?>