<?php

class Controller_Task extends Controller
{

    function action_add()
    {

        if(isset($_POST['fullName']) && isset($_POST['email']) && isset($_POST['taskTextarea'])) {
            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
            $taskTextarea = $_POST['taskTextarea'];

            $image = new Imagick($_FILES['taskImage']['tmp_name']);
            $image->resizeImage(320,240,Imagick::FILTER_LANCZOS,1);
            $image->writeImage($_FILES['taskImage']['tmp_name']);
            $image->destroy();

            $taskImage =  addslashes(file_get_contents($_FILES['taskImage']['tmp_name']));

            $this->model->persist_task($fullName, $email, $taskTextarea, $taskImage);
            header('Location:/');
        }

        $this->view->generate('add_task_view.php', 'template_view.php');
    }

    function action_edit($taskId)
    {

        $task = $this->model->get_task_by_id($taskId);

        if ($task == null) {
            Route::ErrorPage404();
        }

        if(isset($_POST['taskTextarea'])) {

            $taskTextarea = $_POST['taskTextarea'];
            $taskDone = $_POST['done'] ? "yes" : "no";

            $this->model->update_task($taskId, $taskTextarea, $taskDone);
            header('Location:/');
        }

        $this->view->generate('edit_task_view.php', 'template_view.php', $task);
    }

}