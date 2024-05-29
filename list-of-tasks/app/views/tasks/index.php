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

        <div class="mt-5 d-flex justify-content-between align-items-center">
            <h2>List of Tasks</h2>

            <a href="<?= ROOT ?>/tasks/create" class="btn btn-primary">Add New</a>
        </div>

        <table class="table table-striped mt-3">
            <tr>
                <th>Task Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>
                <th></th>
            </tr>
            <?php if ($tasks != null) { ?>
                <?php foreach ($tasks as $item) { ?>
                    <tr>
                        <td><?= $item->task_name ?></td>
                        <td><?= $item->task_description ?></td>
                        <td><?= $item->task_status ?></td>
                        <td><?= $item->task_due ?></td>
                        <td>
                            <a href="<?= ROOT ?>/tasks/edit/<?= $item->id ?>" class="btn btn-success btn-sm">Edit</a>
                            <a href="<?= ROOT ?>/tasks/delete/<?= $item->id ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td colspan="3">
                        <h3>No record found</h3>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <div class="">
            <a href="home" style="float: right" class="btn btn-primary">Back</a>
        </div>

    </div>
</body>

</html>