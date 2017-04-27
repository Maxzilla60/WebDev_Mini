<?php

class WebDev extends Controller
{
    public function index()
    {
        $students = $this->model->getAllStudents();

        require APP . 'view/_templates/header.php';
        require APP . 'view/webdev/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function addStudent()
    {
        if (isset($_POST["submit_add_student"])) {
            $this->model->addStudent($_POST["name"], $_POST["number"],  $_POST["richting"]);
        }

        header('location: ' . URL . 'webdev/index');
    }

    public function deleteStudent($student_id)
    {
        if (isset($student_id)) {
            $this->model->deleteStudent($student_id);
        }

        header('location: ' . URL . 'webdev/index');
    }

    public function editStudent($student_id)
    {
        if (isset($student_id)) {
            $student = $this->model->getStudent($student_id);

            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $song easily
            require APP . 'view/_templates/header.php';
            require APP . 'view/webdev/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            // redirect user to songs index page (as we don't have a song_id)
            header('location: ' . URL . 'webdev/index');
        }
    }

    public function updateStudent()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_update_student"])) {
            // do updateSong() from model/model.php
            $this->model->updateStudent($_POST["name"], $_POST["number"],  $_POST["richting"], $_POST['student_id']);
        }

        // where to go after song has been added
        header('location: ' . URL . 'webdev/index');
    }
}
