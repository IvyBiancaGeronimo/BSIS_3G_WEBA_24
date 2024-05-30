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
          background: linear-gradient(90deg, rgba(102,246,255,1) 34%, rgba(255,255,255,1) 86%);
        }
  </style>

</head>
<body>
<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Delete</h2>
    <div class="mb-2">
      <label for="">First Name</label>
      <input type="text" name="firstname" disabled value="<?= $row->firstname ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input type="text" name="lastname" disabled value="<?= $row->lastname ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input type="email" name="email" disabled value="<?= $row->email ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input type="password" name="password" disabled value="<?= $row->password ?>" class="form-control">
    </div>
    
    <input type="hidden" name="id" value="<?= $row->id ?>">
    <button class="btn btn-danger" type="submit">Delete</button>
  </form>
</div>
</body>
</html>

<?php include "../app/views/partials/footer.php" ?>