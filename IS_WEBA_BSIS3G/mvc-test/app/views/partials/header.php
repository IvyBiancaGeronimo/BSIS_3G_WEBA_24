<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= APP_NAME ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .me-3 {
           margin-left: 400px;
        }
        .navbar-toggler {
          margin-right: 500px;
          margin-top: -50px;
          
        }
        .butt {
          margin-top: 10px;
          margin-left: 1190px;
        }

    </style>

</head>

<body>
  
  <nav class="navbar bg-light" data-bs-theme="black">
    <div class="container">
      <a class="navbar-brand" href="#">
        <?= APP_NAME ?>
      </a>
      <div class="me-3" style="data-bs-theme:dark;">

        <?php if (empty($_SESSION['USER'])): ?>
              <?php else: ?>
              <span class="me-3"><b>Hello!</b>
              <?= $_SESSION['USER']->firstname ?>
              <?= $_SESSION['USER']->lastname ?>
              </span>
        <?php endif; ?>
        

      </div>
      <div class="butt">
            <a href="<?= ROOT ?>/logout" class="btn btn btn-danger">Logout</a>
            </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php if (!empty($_SESSION['USER'])): ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/users">Users</a>
            </li>
            <li class="nav-item">
              <a class="<?php if($page=='meds'){echo 'active';}?>nav-link active" aria-current="page" href="<?= ROOT ?>/meds">Medicines</a>
            </li>
            <li class="nav-item">
              <a class="<?php if($page=='patient'){echo 'active';}?>nav-link active" aria-current="page" href="<?= ROOT ?>/patient">Patient</a>
            </li>
            
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Records
              </a>
              
              <ul class="dropdown-menu">
                <li><a class="<?php if($page=='meds'){echo 'active';}?>dropdown-item" href="<?= ROOT ?>/meds">Medicines</a></li>
                <li><a class="<?php if($page=='patient'){echo 'active';}?>dropdown-item" href="<?= ROOT ?>/patient">Patient</a></li>
              </ul>
            </li>     -->
        </ul>
          
          <?php endif; ?>
      </div>
    </div>
  </nav>
</body>