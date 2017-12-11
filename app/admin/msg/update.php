<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/user-helper.php"; ?>
<?php
  if(isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["sdt"])
    && isset($_POST["email"]) && isset($_POST["msg"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $sdt = $_POST["sdt"];
    $email = $_POST["email"];
    $msg = $_POST["msg"];

    $sql = "update msg set name='$name',sdt='$sdt',email ='$email',msg=$msg where id=$id";
    $result = $conn->query($sql);
    if($result){
      $_SESSION["flash"] = "Updated success";
    }else{
      $_SESSION["flash"] = "Error: ".$sql."<br>".$conn->error;
    }

    header("location: index.php");
  }
?>