<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
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
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../assets/css/admin.css">

  <title>Admin Section - Dashboard</title>
</head>

<body>
    <!-- Admin header -->
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
    <!-- Admin Content -->
    <div class="admin-content">

        <div class="content">

          <h2 class="page-title">Dashboard</h2>

          <!-- Check this [should be messages instead of formErrors] -->

          <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>


        </div>
    </div>
    <!-- // Admin Content -->
</div>
<!-- // Page Wrapper -->

<!-- JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>

<!--Custom Script -->
<script src="../assets/js/scripts.js"></script>

</body>

</html>
