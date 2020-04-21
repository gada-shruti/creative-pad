<?php include("../../path.php"); ?>
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
  <link rel="stylesheet" href="../../assets/css/style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../assets/css/admin.css">

  <title>Admin Section - Add Post</title>
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
          <a href="createPost.php" class="btn btn-big">Add Post</a>
            <a href="managePosts.php" class="btn btn-big">Manage Posts</a>
        </div>
        <div class="content">
          <h2 class="page-title">Create Post</h2>

          <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

          <form action="createPost.php" method="post" enctype="multipart/form-data">
              <div>
                <label>Title</label>
                <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
              </div>
              <div>
                <label>Body</label>
                <textarea name="body"  id="body"><?php echo $body ?></textarea>
              </div>
              <div>
                <label>Image</label>
                <input type="file" name="image" class="text-input">

              </div>

              <div>
                <label>Topic</label>
                <select name="topic_id" class="text-input">
                  <option value=""></option>
                  <?php foreach ($topics as $key => $topic): ?>

                    <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                      <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                    <?php else: ?>
                      <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </select>
              </div>

              <div>
                <?php if (empty($published)): ?>
                  <label>
                      <input type="checkbox" name="published">
                      Publish
                  </label>
                <?php else: ?>
                  <label>
                      <input type="checkbox" name="published" checked>
                      Publish
                  </label>
                <?php endif; ?>
              </div>
              <div>
                <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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
