<?php

class Teachers extends Controller
{

    protected object $teachersObject;

    public function __construct()
    {
        $this->teachersObject = $this->model('Teacher');
    }

    public function index()
    {
        $data = [
            'title' => 'Teachers',
            'teachers' => $this->teachersObject->getTeachersFormatted()
        ];

        $this->view('teachers/index', $data);
    }

    public function update($id = null) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->teachersObject->updateTeacher($_POST);
            header("location " . URLROOT . "teachers/index");
        } else {
           // echo "Hoi";exit();
            $row = $this->teachersObject->getSingleTeacher($id);
            //var_dump($row);exit();
            $data = [
                'title' => '<h1>Update teacher informatie</h1>',
                'row' => $row
            ];
            //var_dump($data);exit();
            $this->view("teachers/update", $data);
        }
    }
}