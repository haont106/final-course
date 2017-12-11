<?php if(isset($_SESSION["login"])){ ?>
	<div class="container">
		<ul class="toolbar list-unstyled text-center">
			<li><a href="admin/users/index.php">user</a></li>
			<li><a href="admin/products/index.php">product</a></li>
			<li><a href="admin/catalogs/index.php">catalogs</a></li>
			<li><a href="admin/msg/index.php">message</a></li>
		</ul>
	</div>
<?php } ?>