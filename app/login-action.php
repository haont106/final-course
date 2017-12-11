<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_SITE", "http://localhost/final-course/app/"); 
?>
<?php
	if(isset($_POST["email"]) && isset($_POST["password"])){
		$email = $_POST["email"];
		$password = $_POST["password"];
		$sql = "select * from users where email='$email' and password='$password'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION["login"] = true;
			$_SESSION["userid"] = $row["id"];
			$_SESSION["flash"] = "<div class='alert alert-success alert-dismissable my-alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong> THÔNG BÁO ! </strong><br>Đăng nhập thành công.</div>";
			switch ($row['role']) {
            case 0:
              $_SESSION["user"] = "Admin: ".$row['name'];
              $_SESSION["edit"] = true;
              $_SESSION["delete"] = true;
              break;
            case 1:
              $_SESSION["user"] = "Editor: ".$row['name'];
              $_SESSION["edit"] = true;
              break;
            case 2:
              $_SESSION["user"] = "User: ".$row['name'];
              break;
          };
          header("location: ".URL_SITE."index.php");
		}else{			
			$_SESSION["flash"] = "<div class='alert alert-danger alert-dismissable my-alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>!!!!!!!!!! CẢNH BÁO !!!!!!!!!! </strong><br>Đăng nhập không thành công.</div>";
			header("location: ".URL_SITE."login.php");
		}
	}else{
		$_SESSION["flash"] = "<div class='alert alert-danger alert-dismissable my-alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>!!!!!!!!!! CẢNH BÁO !!!!!!!!!! </strong><br>Wrong params.</div>";
		header("location: ".URL_SITE."login.php");
	}
	
?>