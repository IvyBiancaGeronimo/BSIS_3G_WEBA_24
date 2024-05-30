<?php include "../app/views/partials/header.php" ?>

<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
  <a href="<?= ROOT ?>/patient/create"></a>
    <h2>Patient</h2>

    <?php if (!empty($errors)): ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">

        <?php foreach ($errors as $error): ?>
          <?= $error . "<br>" ?>
        <?php endforeach; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php endif; ?>

    <div class="mb-2">
      <label for="">First Name</label>
      <input type="text" name="firstname" value="<?= get_var('firstname') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input type="text" name="lastname" value="<?= get_var('lastname') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Contact</label>
      <input type="text" name="contact" value="<?= get_var('contact') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Address</label>
      <input type="text" name="address" value="<?= get_var('address') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Prescription</label>
      <input type="text" name="presc" value="<?= get_var('presc') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Quantity</label>
      <input type="text" name="qty" value="<?= get_var('qty') ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Date Given</label>
      <input type="text" name="date_given" value="<?= get_var('date_given') ?>" class="form-control">
    </div>
    

    <button class="btn btn-primary" type="submit">Create</button>
  </form>
</div>

<?php include "../app/views/partials/footer.php" ?>