<?php include "../app/views/partials/header.php" ?>

<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Edit Info</h2>

    </div>
    <div class="mb-2">
      <label for="">First Name</label>
      <input type="text" name="Firstname" value="<?= $row['Firstname'] ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input type="text" name="Lastname" value="<?= $row['Lastname'] ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Contact</label>
      <input type="text" name="Contact" value="<?= $row['Contact'] ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Address</label>
      <input type="int" name="address" value="<?= $row['address'] ?>" class="form-control">
    </div>

    <button class="btn btn-primary" type="submit">Update</button>
  </form>
</div>

<?php include "../app/views/partials/footer.php" ?>