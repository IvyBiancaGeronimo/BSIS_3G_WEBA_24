<?php 

<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Delete user</h2>
    <div class="mb-2">
      <label for="">Medicine Name</label>
      <input type="text" name="medname" disabled value="<?php= echo $row['med_name'] ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Medicine Prescription</label>
      <input type="text" name="medpresc" disabled value="<?php= echo $row['med_presc'] ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Medicine Type</label>
      <input type="text" name="medtype" disabled value="<?php= echo $row['med_type'] ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Medicine Quantity</label>
      <input type="int" name="medquan" disabled value="<?php= echo $row['qty'] ?>" class="form-control">
    </div>

    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <a href="<?= ROOT ?>/meds/delete-meds/<?= $row['id'] ?>" class="btn btn-outline-danger btn-sm">Delete</a>
  </form>
</div>

?>