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

  <title>Admin Section - Manage Posts</title>
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
          <h2 class="page-title">Manage Posts</h2>

          <?php include(ROOT_PATH . "/app/includes/messages.php") ?>

          <table>
            <thead>
              <th>SN</th>
              <th>Title</th>
              <th>Author</th>
              <th colspan="3">Action</th>
            </thead>
            <tbody>

              <?php foreach ($posts as $key => $post): ?>
                <tr>
                  <td><?php echo $key + 1; ?></td>
                  <td><?php echo $post['title']; ?></td>
                  <td>Elsa</td>
                  <td><a href="editPost.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
                  <td><a href="editPost.php?delete_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>

                  <?php if ($post['published']): ?>
                      <td><a href="editPost.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">Unpublish</a></td>
                  <?php else: ?>
                      <td><a href="editPost.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">Publish</a></td>
                  <?php endif; ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
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
