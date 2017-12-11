<?php session_start(); ?>
<?php
  define("URL_SITE", "http://localhost/final-course/app/"); 
?>
<?php
	unset($_SESSION["login"]);
	unset($_SESSION["edit"]);
	unset($_SESSION["delete"]);
	$_SESSION["flash"] = "<div class='alert alert-danger alert-dismissable my-alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>!!!!!!!!!! CẢNH BÁO !!!!!!!!!! </strong><br>Đã đăng xuất<br>See you again</div>";
	header("location: ".URL_SITE."index.php");
?>