<?php 

<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Delete user</h2>
    <div class="mb-2">
      <label for="">First Name</label>
      <input type="text" name="firstname" disabled value="<?php= echo $row['firstname'] ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input type="text" name="lastname" disabled value="<?php= echo $row['lastname'] ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Contact</label>
      <input type="text" name="contact" disabled value="<?php= echo $row['contact'] ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for=""><Address></Address></label>
      <input type="int" name="address" disabled value="<?php= echo $row['address'] ?>" class="form-control">
    </div>

    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <a href="<?= ROOT ?>/patient/delete/<?= $row['id'] ?>" class="btn btn-outline-danger btn-sm">Delete</a>
  </form>
</div>

?>