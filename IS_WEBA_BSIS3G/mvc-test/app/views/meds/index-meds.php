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
          background: url(../public/assets/image/Def.jpg);
          background-size: 100%;
        }
  </style>
</head>
<body>
<div class="container mt-5">

<div class="d-flex justify-content-between align-items-center">
<h2>Medications</h2>
<a href="<?= ROOT ?>/meds/create-meds" class="btn btn-primary">Add New</a>
</div>
<table class="table table-striped mt-3">
  <tr>
    <th>Medication Name</th>
    <th>Prescription</th>
    <th>Type</th>
    <th>Quantity</th>
    <th></th>
  </tr>
<?php
      $connect=mysqli_connect("localhost","root","","mvc_db") or die("Connection Failed");
      $query="SELECT * FROM medicines";
      $result=mysqli_query($connect,$query);
      while ($row=mysqli_fetch_assoc($result))
      {
        ?>
            <tr>
              <td><?php echo $row['med_name']?></td>
              <td><?php echo $row['med_presc']?></td>
              <td><?php echo $row['med_type']?></td>
              <td><?php echo $row['qty']?></td>
            <td>
              <a href="<?= ROOT ?>/meds/edit-meds/<?= $row['id'] ?>" class="btn btn-outline-success btn-sm">Edit</a>
              <a href="<?= ROOT ?>/meds/delete-meds/<?= $row['id'] ?>" class="btn btn-outline-danger btn-sm">Delete</a>
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



