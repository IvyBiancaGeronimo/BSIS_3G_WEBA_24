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
    <h2>Edit</h2>

    <div class="mb-2">
      <label for="">Role</label>
      <select name="role" class="form-control">
        <option value="">Choose a Role</option>
        <option <?= $row->role == 'Admin' ? 'selected' : '' ?> value="Admin">Admin</option>
        <option <?= $row->role == 'User' ? 'selected' : '' ?> value="User">User</option>
      </select>
    </div>
    <div class="mb-2">
      <label for="">First Name</label>
      <input type="text" name="firstname" value="<?= $row->firstname ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input type="text" name="lastname" value="<?= $row->lastname ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input type="email" name="email" value="<?= $row->email ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input type="password" name="password" value="<?= $row->password ?>" class="form-control">
    </div>
        
    <button class="btn btn-outline-primary" type="submit">Update</button>
</div>

</body>
</html>

<?php include "../app/views/partials/footer.php" ?>