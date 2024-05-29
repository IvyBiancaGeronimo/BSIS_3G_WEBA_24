<?php

class Tasks extends Controller
{
    public function index()
    {
        $x = new Task();
        $rows = $x->findALL();

        $this->view('tasks/index', [
            'tasks' => $rows
        ]);
    }

    public function create()
    {
        $x = new Task();

        if (isset($_POST['create'])) {

            $arr['task_name'] = $_POST['taskname'];
            $arr['task_description'] = $_POST['taskdescription'];
            $arr['task_status'] = $_POST['taskstatus'];
            $arr['task_due'] = $_POST['taskdue'];

            $x->insert($arr);

            redirect('tasks');
        }

        $this->view('tasks/create');
    }

    public function edit($id)
    {
        $x = new Task();
        $arr['id'] = $id;
        $row = $x->first($arr);

        if (isset($_POST['update'])) {

            $arr['task_name'] = $_POST['taskname'];
            $arr['task_description'] = $_POST['taskdescription'];
            $arr['task_status'] = $_POST['taskstatus'];
            $arr['task_due'] = $_POST['taskdue'];

            $x->update($id, $arr);

            redirect('tasks');
        }

        $this->view('tasks/edit', [
            'task' => $row
        ]);
    }

    public function delete($id)
    {
        $x = new Task();
        $arr['id'] = $id;
        $row = $x->first($arr);

        if (isset($_POST['delete'])) {

            $x->delete($id);

            redirect('tasks');
        }

        $this->view('tasks/delete', [
            'task' => $row
        ]);
    }
}