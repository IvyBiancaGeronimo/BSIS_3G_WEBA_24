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

      <!-- <div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Edit</h2>

    <div class="mb-2">
      <label for="">Medicine Name</label>
      <input type="text" value="<?= $row['med_name'] ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Medicine Prescription</label>
      <input type="text" value="<?= $row['med_presc'] ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Medicine Type</label>
      <input type="text" value="<?= $row['med_type'] ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Medicine Quantity</label>
      <input type="text" value="<?= $row['med_quan'] ?>" class="form-control">
    </div>

    <button class="btn btn-outline-primary" type="submit">Update</button>
</div> -->

<div class="container mt-5">

<h2>Informations</h2>
</div>
<table class="table table-striped mt-3">
  <tr>
    <th>Medicine Name</th>
    <th>Medicine Prescription</th>
    <th>Medicine Type</th>
    <th>Medicine Quantity</th>
    <th></th>
  </tr>
<?php
      $connect=mysqli_connect("localhost","root","","mvc_db") or die("Connection Failed");
      $query="select * from medicines";
      $result=mysqli_query($connect,$query);
      while ($row=mysqli_fetch_assoc($result))
      {
        ?>
            <tr>
              <div class="mb-2">
                <label for="">Medicine Name</label>
                <input type="text" value="<?= $row['med_name'] ?>" class="form-control">
              </div>
              <div class="mb-2">
                <label for="">Medicine Prescription</label>
                <input type="text" value="<?= $row['med_presc'] ?>" class="form-control">
              </div>
              <div class="mb-2">
                <label for="">Medicine Type</label>
                <input type="text" value="<?= $row['med_type'] ?>" class="form-control">
              </div>
              <div class="mb-2">
                <label for="">Medicine Quantity</label>
                <input type="text" value="<?= $row['med_quan'] ?>" class="form-control">
              </div>
            <td>
              <button class="btn btn-outline-primary" type="submit">Update</button>
            </td>  
            </tr>
            
        <?php
      }
?>
</table>
</div>  

</body>
</html>

<?php include "../app/views/partials/footer.php" ?>