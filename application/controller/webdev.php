<?php

class WebDev extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        $students = $this->model->getAllStudents();

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/webdev/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function addStudent()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_add_student"])) {
            // do addSong() in model/model.php
            $this->model->addStudent($_POST["name"], $_POST["number"],  $_POST["richting"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'webdev/index');
    }


    public function deleteStudent($student_id)
    {
        // if we have an id of a song that should be deleted
        if (isset($student_id)) {
            // do deleteSong() in model/model.php
            $this->model->deleteStudent($student_id);
        }

        // where to go after song has been deleted
        header('location: ' . URL . 'webdev/index');
    }
}
