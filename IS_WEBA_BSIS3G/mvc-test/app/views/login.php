<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        body {
          background: url(../public/assets/image/pics/4.jpg);
          background-size: 100%;
        }
        .log {
            display: flex;
            flex-direction: column;
            height: 550px;
            width: 500px;
            align-items: center;
            margin: auto;
            margin-top: 100px;
            margin-bottom: 100px;
            margin-right: 100px;
            backdrop-filter: blur(50px);
            box-shadow: inset -5px -5px rgba(0, 0, 0, 0.5);
            border-radius: 25px;
        }
        .log h2 {
            margin-top: 45px;
            margin-bottom: 25px;
            color: White;
        }
        .btn {
            margin-top: 25px;
            padding: 8px;
            width: 400px;
            border: none;
            outline: none;
            border-radius: 25px;
            box-shadow: inset -3px -3px rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 1rem;
        }
        .form-control1 {
            padding: 8px;
            width: 420px;
            border: none;
            outline: none;
            border-radius: 15px;
            background-color: rgba(0, 0, 0, 0.5); 
            box-shadow: inset -3px -3px rgba(0, 0, 0, 0.5);
            font-size: 1rem;
            margin-bottom: 30px;
            background-color: white;
        }
        .form-control2 {
            padding: 8px;
            width: 420px;
            border: none;
            outline: none;
            border-radius: 15px;
            background-color: rgba(0, 0, 0, 0.5); 
            box-shadow: inset -3px -3px rgba(0, 0, 0, 0.5);
            font-size: 1rem;
            margin-bottom: 30px;
            background-color: white;
        }
        .mb-2 {
            color: white;
        }
        .log1 {
            color: White;
            display: flex;
            font-size: 20px;
            margin-top: 10px;
            margin-bottom: 5px;
        }
        .log2 {
            margin-top: 10px;
            color: White;
            display: flex;
            font-size: 20px;
            margin-bottom: 5px;
        }
        
    </style>

</head>
<body>
<div class="container mt-5">

<form action="" method="POST" class="w-50 mx-auto">

  <?php if (!empty($errors)): ?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">

      <?php foreach ($errors as $error): ?>
        <?= $error . "<br>" ?>
      <?php endforeach; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

  <?php endif; ?>
  <div class="log">
  <h2>Welcome to MedCare</h2>
  <div class="mb-2">
    <label class="log1">Email</label>
    <input type="text" name="email" value="<?= get_var('email') ?>" class="form-control1">
  </div>
  <div class="mb-2">
    <label class="log2">Password</label>
    <input type="password" name="password" class="form-control2">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  </div>
</form>
</div>
</body>
</html>
