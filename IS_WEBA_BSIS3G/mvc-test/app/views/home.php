<?php include "partials/header.php" ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel = "stylesheet" href = "	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js></script>

  <style>
        body {
          background-color: #00559A;
        }
        .carousel-inner {
          
        }
        .display-2 {
          color: white;
          margin-bottom: 50px;
        }
        

  </style>  

</head>
<body>

<!-- TITLE -->
<div class="container mt-5">
    <h1 class="display-2">MedCare</h1>
      </div>


<!-- CAROUSEL -->
<div class="carousel">
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
<div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../public/assets/image/pics/Slide1.JPG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../public/assets/image/pics/Slide2.JPG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../public/assets/image/pics/Slide3.JPG" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>

<div class="container mt-5">
  <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="row justify-content-center">
        <div class="card1" style="width: 20rem;">
          <img src="../public/assets/image/pics/exercise.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">"Good Health is above Wealth!".</p>
          </div>
        </div>
        <div class="card2" style="width: 20rem;">
          <img src="../public/assets/image/pics/happylife.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">"Make Yourself a Priority"</p>
          </div>
        </div>
        <div class="card3" style="width: 20rem;">
          <img src="../public/assets/image/pics/selfproud.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">"Our bodies are our Gardens - our wills are our Gardeners"</p>
          </div>
        </div>
        <div class="card4" style="width: 20rem;">
          <img src="../public/assets/image/Eloy.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">"Our bodies are our Gardens - our wills are our Gardeners"</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- SEARCH AND DISPLAY -->
<div class="table1">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <form action="" method="GET">
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" name="search" placeholder="Search here..."> 
          <button type="submit" class="btn btn-primary">Go</button>
        </div>
      </form>

    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">Registered Admins</h4>
        </div>
          <div class="card-body">

              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>Email</th>
                      </tr>
                  </thead>
                  <tbody>

                  <?php

                      if(isset($_GET['search']))
                      {
                          $connection = mysqli_connect("localhost","root","","mvc_db");
                          $filtervalue = $_GET['search'];
                          $filterdata = "SELECT * FROM users WHERE CONCAT(firstname, lastname, email) LIKE '%$filtervalue%'";
                          $filterdata_run = mysqli_query($connection, $filterdata);

                          if(mysqli_num_rows($filterdata_run) > 0){
                              foreach($filterdata_run as $row)
                              {
                              ?>
                                <tr>
                                    <td><?php echo $row['firstname']; ?></td>
                                    <td><?php echo $row['lastname']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                </tr>
                              <?php
                              }
                          }
                          else
                          {
                            ?>
                            <tr>
                            <td colspan="4">No Records Found</td>
                            </tr>
                            <?php
                          }
                      }
                     
                  ?>    

                  </tbody>
              </table>
            </div>
          </div>
          
      </div>
    </div>
  </div>
</div>


<!-- LIST OF PATIENT -->
<div class="table2">
  <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <form action="" method="GET">
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" name="search" placeholder="Search here..."> 
          <button type="submit" class="btn btn-primary">Go</button>
        </div>
      </form>

    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">Number of Patients</h4>
        </div>
          <div class="card-body">

              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>Contact</th>
                          <th>Address</th>
                          <th>Prescription</th>
                          <th>Quantity</th>
                          <th>Date Given</th>
                      </tr>
                  </thead>
                  <tbody>

                  <?php

                      if(isset($_GET['search']))
                      {
                          $connection = mysqli_connect("localhost","root","","mvc_db");
                          $filtervalue = $_GET['search'];
                          $filterdata = "SELECT * FROM patient WHERE CONCAT(firstname, lastname, contact, address, presc, qty, date_given) LIKE '%$filtervalue%'";
                          $filterdata_run = mysqli_query($connection, $filterdata);

                          if(mysqli_num_rows($filterdata_run) > 0){
                              foreach($filterdata_run as $row)
                              {
                              ?>
                                <tr>
                                    <td><?php echo $row['firstname']; ?></td>
                                    <td><?php echo $row['lastname']; ?></td>
                                    <td><?php echo $row['contact']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['presc']; ?></td>
                                    <td><?php echo $row['qty']; ?></td>
                                    <td><?php echo $row['date_given']; ?></td>
                                </tr>
                              <?php
                              }
                          }
                          else
                          {
                            ?>
                            <tr>
                            <td colspan="4">No Records Found</td>
                            </tr>
                            <?php
                          }
                      }
                     
                  ?>    

                  </tbody>
              </table>
            </div>
          </div>
          
      </div>
    </div>
  </div>
</div>


<!-- MEDICATION LIST -->
<div class="table3">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <form action="" method="GET">
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" name="search" placeholder="Search here..."> 
          <button type="submit" class="btn btn-primary">Go</button>
        </div>
      </form>

    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">Medicines</h4>
        </div>
          <div class="card-body">

              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th>Medication Name</th>
                          <th>Prescription</th>
                          <th>Type</th>
                          <th>Quantity</th>
                      </tr>
                  </thead>
                  <tbody>

                  <?php

                      if(isset($_GET['search']))
                      {
                          $connection = mysqli_connect("localhost","root","","mvc_db");
                          $filtervalue = $_GET['search'];
                          $filterdata = "SELECT * FROM medicines WHERE CONCAT(med_name, med_presc, med_type, qty) LIKE '%$filtervalue%'";
                          $filterdata_run = mysqli_query($connection, $filterdata);

                          if(mysqli_num_rows($filterdata_run) > 0){
                              foreach($filterdata_run as $row)
                              {
                              ?>
                                <tr>
                                    <td><?php echo $row['med_name']; ?></td>
                                    <td><?php echo $row['med_presc']; ?></td>
                                    <td><?php echo $row['med_type']; ?></td>
                                    <td><?php echo $row['qty']; ?></td>
                                </tr>
                              <?php
                              }
                          }
                          else
                          {
                            ?>
                            <tr>
                            <td colspan="4">No Records Found</td>
                            </tr>
                            <?php
                          }
                      }
                     
                  ?>    

                  </tbody>
              </table>
            </div>
          </div>
          
      </div>
    </div>
  </div>
</div>
</body>
</html>

<?php include "partials/footer.php" ?>