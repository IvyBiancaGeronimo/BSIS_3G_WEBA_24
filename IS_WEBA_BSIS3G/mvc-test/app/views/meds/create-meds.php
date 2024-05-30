<?php include "../app/views/partials/header.php" ?>

include="index-meds.php";
<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Medicines</h2>

    <?php if (!empty($errors)): ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">

        <?php foreach ($errors as $error): ?>
          <?= $error . "<br>" ?>
        <?php endforeach; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php endif; ?>

    <div class="mb-2">
      <label for="">Medicine Name</label>
      <input type="text" name="med_name" value="<?= get_var('med_name') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Prescription</label>
      <input type="text" name="med_presc" value="<?= get_var('med_presc') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Type</label>
      <input type="text" name="med_type" value="<?= get_var('med_type') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Quantity</label>
      <input type="text" name="qty" value="<?= get_var('qty') ?>" class="form-control">
    </div>
>

    <div class="mb-2">
      <label for="">Type</label>
        <select name="med_type" class="form-control">
          <option value="">Choose Type</option>
          <option <?= get_select('type', 'Tablet') ?> value="Tablet">Tablet</option>
          <option <?= get_select('type', 'Capsule') ?> value="Capsule">Capsule</option>
          <option <?= get_select('type', 'Syrup') ?> value="Syrup">Syrup</option>
        </select>
    </div>
    
    <div class="mb-2">
      <label for="">Quantity</label>
      <input type="text" name="med_quan" value="<?= get_var('med_quan') ?>" class="form-control">
    </div>


    <button class="btn btn-primary" type="submit">Create</button>
  </form>
</div>

<?php include "../app/views/partials/footer.php" ?>