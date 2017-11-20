<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/products-helper.php"; ?>
<?php
  if(isset($_POST["catalog_id"]) && isset($_POST["name"])
    && isset($_POST["image"]) && isset($_POST["description"])
    && isset($_POST["qty"]) && isset($_POST["price"])){
    $user_id = 1;
    $catalog_id = $_POST["catalog_id"];
    $name = $_POST["name"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];


    if(validate($name, $description)){
      $sql = "insert into products(user_id,catalog_id,name,image,description,qty,price) 
      values($user_id,$catalog_id,'$name','$image','$description',$qty,$price)";
      $result = $conn->query($sql);
      if($result){
        $_SESSION["flash"] = "New record added success";
      }
      else{
        $_SESSION["flash"] = "Error: ".$sql."<br>".$conn->error;
      }
    }

    header("location: new.php");
  }
?>