<header>
  <?php //x-xss-protection: 1; mode=block;
  $headers = [];
  $headers['X-XSS-Protection'] = '1; mode=block';
    // header (“X-XSS-Protection: 1; mode=block”);
   ?>
  <!-- <a href="<?//php echo BASE_URL . '/index.php' ?>" class="logo">
    <h1 class="logo-text"><span>Creative</span>Pad</h1>
  </a> -->
  <a class="logo">
    <h1 class="logo-text"><span>Creative</span>Pad</h1>
  </a>
    <i class="fa fa-bars menu-toggle"></i>
      <ul class="nav">
          <!-- <li><a href="<?php //echo BASE_URL . '/dashboard.php' ?>">Home</a></li> -->
          <!-- <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li> -->

          <?php if (isset($_SESSION['id'])): ?> <!-- To check if the id contains value  -->
              <li><a href="<?php echo BASE_URL . '/dashboard.php' ?>">Home</a></li>
              <li>
                <a href="#">
                  <i class="fa fa-user"></i>
                  <?php echo $_SESSION['username']; ?>
                  <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                  <?php if ($_SESSION['admin']): ?> <!-- To check if the value is true i.e. admin = 1 -->
                      <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
                  <?php endif; ?>

                  <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
                </ul>
              </li>
          <?php else: ?>
              <li><a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></li>
              <li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>
          <?php endif; ?>

      </ul>
</header>
