<?php

// контролер
    Class Controller_task Extends Controller_Base
    {

        // шаблон
        public $layouts = "first_layouts";

        // экшен
        function index()
        {
            $this->template->view('index');
        }

        function create()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // The request is using the POST method
                /**/
                if (isset($_POST['title'])) {
                    $title = $_POST['title'];
                }
                if (isset($_POST["text"])) {
                    $text = $_POST["text"];
                }

                $model = new Model_Task($title, null, $text);
                $model->save();


            } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {

                $this->template->view('create');
            }
        }

    }