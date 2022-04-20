<?php

class Teachers extends Controller
{

    protected object $teachersObject;

    public function __construct()
    {
        $this->teachersObject = $this->model('teacher');
    }

    public function index()
    {
        $data = [
            'title' => 'Teachers',
            'teachers' => $this->teachersObject->getTeachersFormatted()
        ];

        $this->view('teachers/index', $data);
    }
}