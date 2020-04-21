<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:ital,wght@1,800&display=swap" rel="stylesheet">

  <!--link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,800&display=swap" rel="stylesheet"-->

  <!--link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"-->

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Login</title>
</head>

<body>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

      <div class="auth-content">
        <form action="login.php" method="post">
          <h2 class="form-title">Login</h2>

          <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

          <div>
              <label>Username</label>
              <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
          </div>

          <div>
              <label>Password</label>
              <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
          </div>


          <div>
            <button type="submit" name="login-btn" class="btn btn-big">Login</button>
          </div>
          <p> Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
        </form>

      </div>


<!-- JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

<!--Custom Script -->
<script src="assets/js/scripts.js"></script>



</body>

</html>
