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
          background: url(../public/assets/image/medical.jpg);
          background-size: 100%;
        }
  </style>
</head>
<body>
<div class="container mt-5">

<div class="d-flex justify-content-between align-items-center">
<h2>Informations</h2>
<a href="<?= ROOT ?>/patient/create" class="btn btn-primary">Add New</a>
</div>
<table class="table table-striped mt-3">
  <tr>
    <th>First Name</th>
    <th>Last name</th>
    <th>Contact</th>
    <th>Address</th>
    <th>Prescription</th>
    <th>Quantity</th>
    <th>Date Given</th>
    <th></th>
  </tr>
<?php
      $connect=mysqli_connect("localhost","root","","mvc_db") or die("Connection Failed");
      $query="select * from patient";
      $result=mysqli_query($connect,$query);
      while ($row=mysqli_fetch_assoc($result))
      {
        ?>
            <tr>
              <td><?php echo $row['firstname']?></td>
              <td><?php echo $row['lastname']?></td>
              <td><?php echo $row['contact']?></td>
              <td><?php echo $row['address']?></td>
              <td><?php echo $row['presc']?></td>
              <td><?php echo $row['qty']?></td>
              <td><?php echo $row['date_given']?></td>
            <td>
              <a href="<?= ROOT ?>/patient/edit/<?= $row['id'] ?>" class="btn btn-outline-success btn-sm">Edit</a>
              <a href="<?= ROOT ?>/patient/delete/<?= $row['id'] ?>" class="btn btn-outline-danger btn-sm">Delete</a>
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



