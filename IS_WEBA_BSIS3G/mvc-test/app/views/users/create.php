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
    <h2>Create New Admin</h2>

    <?php if (!empty($errors)): ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">

        <?php foreach ($errors as $error): ?>
          <?= $error . "<br>" ?>
        <?php endforeach; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php endif; ?>

    <div class="mb-2">
      <label for="">Role</label>
      <select name="role" class="form-control">
        <option <?= get_select('role', 'Admin') ?> disable type="text" value="Admin">Admin</option>
      </select>
    </div>
    <div class="mb-2">
      <label for="">First Name</label>
      <input type="text" name="firstname" value="<?= get_var('firstname') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input type="text" name="lastname" value="<?= get_var('lastname') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input type="text" name="email" value="<?= get_var('email') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input type="password" name="password" value="<?= get_var('password') ?>" class="form-control">
    </div>

    <button class="btn btn-primary" type="submit">Create</button>
  </form>
</div>
</body>
</html>

<?php include "../app/views/partials/footer.php" ?>