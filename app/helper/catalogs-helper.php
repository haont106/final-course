<?php
  function validate($name,$description){
    if(trim($name) == "" || trim($description) == ""){
      $_SESSION["flash"] = "Name or Description can not empty";
      return false;
    }
    $sql = "select * from catalogs where description='$description'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      $_SESSION["flash"] = "Description was existed.";
      return false;
    }
    return true;
  }
?>