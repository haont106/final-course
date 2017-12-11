
<?php
  session_start();
  define("URL_SITE", "http://localhost/final-course/app/"); 
?>
<?php
	if(!isset($_SESSION["login"])){
		$_SESSION["flash"] = "<div class='alert alert-danger alert-dismissable my-alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>!!!!!!!!!! CẢNH BÁO !!!!!!!!!! </strong><br><i>Bạn phải LOGIN trước</i></div>";
		header("location: ".URL_SITE."index.php");
	}
?>