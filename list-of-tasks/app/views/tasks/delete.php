<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">

    <form action="" method="POST" class="mt-5 w-50 mx-auto">
      <h2>Delete Task</h2>

      <div class="mb-2">
        <label for="">Task Name</label>
        <input name="taskname" disabled value="<?= $task->task_name ?>" type="text" class="form-control">
      </div>
      <div class="mb-2">
        <label for="">Description</label>
        <input name="taskdescription" disabled value="<?= $task->task_description ?>" type="text" class="form-control">
      </div>
      <div class="mb-2">
        <label for="">Status</label>
        <input name="taskstatus" disabled value="<?= $task->task_status ?>" type="text" class="form-control">
      </div>
      <div class="mb-2">
        <label for="">Due</label>
        <input name="taskdue" disabled value="<?= $task->task_due ?>" type="text" class="form-control">
      </div>
    
      <button name="delete" type="submit" class="btn btn-danger">Delete</button>
      
    </form>

  </div>
</body>

</html>