<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
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
  <link rel="stylesheet" href="../../assets/css/style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../assets/css/admin.css">

  <title>Admin Section - Edit Topic</title>
</head>

<body>
    <!-- Admin header -->
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
<!-- Admin Page Wrapper -->
<div class="admin-wrapper">

    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
    <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
              <a href="createTopic.php" class="btn btn-big">Add Topic</a>
                <a href="manageTopics.php" class="btn btn-big">Manage Topics</a>
            </div>
            <div class="content">
              <h2 class="page-title">Edit Topic</h2>

              <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

              <form action="editTopic.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                  <label>Name</label>
                  <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
                </div>
                <div>
                  <label>Description</label>
                  <textarea name="description" id="body"><?php echo $description; ?></textarea>
                </div>

                <div>
                  <button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>
                </div>
              </form>

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
<script src="../../assets/js/scripts.js"></script>


</body>

</html>
