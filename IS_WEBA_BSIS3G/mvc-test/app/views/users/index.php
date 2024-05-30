<?php include "../app/views/partials/header.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "stylesheet" href = "	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js></script>
  <style>
      body {
        background: url(../public/assets/image/Care.jpg);
        background-size: 100%;
      }
      .Res {
        color: Black;
      }
  </style>
  
</head>
<body>
<div class="container mt-5">

<div class="d-flex justify-content-between align-items-center">
  <h2 class="Res">Registered Admins</h2>
  <a href="<?= ROOT ?>/users/create" class="btn btn-primary">Add New</a>
</div>

<table class="table table-striped mt-3">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th></th>
  </tr>
  <?php foreach ($users as $row) { ?>
    <tr>
      <td>
        <?= $row->firstname ?>
      </td>
      <td>
        <?= $row->lastname ?>
      </td>
      <td>
        <?= $row->email ?>
      </td>
      <td>
        <a href="<?= ROOT ?>/users/edit/<?= $row->id ?>" class="btn btn-outline-info btn-sm">Edit</a>
        <a href="<?= ROOT ?>/users/delete/<?= $row->id ?>" class="btn btn-outline-danger btn-sm">Delete</a>
      </td>
    </tr>
  <?php } ?>
</table>
</div>

</body>
</html>



<?php include "../app/views/partials/footer.php" ?>