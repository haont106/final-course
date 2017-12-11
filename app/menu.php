    <nav class="navbar navbar-expand-lg navbar-dark fixed-top mytop">
      <div class="container">
        <a class="navbar-brand my-logo pr-2" href="index.php">HaiVoL Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-1 active">
              <a class="nav-link mya" href="index.php">Home</a>
            </li>
            <li class="nav-item ml-1">
              <a class="nav-link mya" href="about.php">About</a>
            </li>
            <li class="nav-item ml-1">
              <a class="nav-link mya" href="address.php">Address</a>
            </li>
            <li class="nav-item ml-1">
              <a class="nav-link mya" href="contact.php">Contact</a>
            </li>
            <?php if(isset($_SESSION["login"])){ ?>
            <li class="nav-item ml-1 dropdown">
              <a class="nav-link mya dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["user"]; ?></a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="admin/users/">Admin panel</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
            <?php }else{ ?>
              <li class="nav-item ml-1">
                <a class="nav-link mya" href="login.php">LOGIN</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>