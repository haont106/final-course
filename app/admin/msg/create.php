<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/msg-helper.php"; ?>
<?php
  if(isset($_POST["name"]) && isset($_POST["sdt"])
    && isset($_POST["email"]) && isset($_POST["msg"])){
    $name = $_POST["name"];
    $sdt = $_POST["sdt"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];

    if(validate($name, $sdt, $email)){
      $sql = "insert into msg(name,sdt,email,msg) values('$name','$sdt','$email','$msg')";
      $result = $conn->query($sql);
      if($result){
        $_SESSION["flash"] = "<div class='alert alert-success alert-dismissable my-alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>THÔNG BÁO! </strong><br>Gửi tin nhắn thành công!</div>";
      }else{
        $_SESSION["flash"] = "<div class='alert alert-danger alert-dismissable my-alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>!!!!!!!!!! CẢNH BÁO !!!!!!!!!! </strong><br>Đã xảy ra lỗi: ".$sql."<br>".$conn->error."</div>";
      }
    }

    header("location: ../../contact.php");
  }
?>