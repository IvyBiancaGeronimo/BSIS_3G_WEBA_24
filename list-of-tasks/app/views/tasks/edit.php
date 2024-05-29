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
            <h2>Edit Task</h2>

            <div class="mb-2">
                <label for="">Task Name</label>
                <input name="taskname" value="<?= $task->task_name ?>" type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Description</label>
                <input name="taskdescription" value="<?= $task->task_description ?>" type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Status</label>
                <input name="taskstatus" value="<?= $task->task_status ?>" type="text" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Due Date</label>
                <input name="taskdue" value="<?= $task->task_due ?>" type="text" class="form-control">
            </div>

            <button name="update" type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
</body>

</html>