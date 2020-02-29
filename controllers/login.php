<?php

// контролер
    Class Controller_login Extends Controller_Base
    {

        // шаблон
        public $layouts = "first_layouts";

        // экшен
        function index()
        {
            /*$user = new Model_Users();
            $user->name = "admin";
            $user->email = "admin@admin.ru";
            $user->password = "123";

            $user->save();

            die();*/

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $email = $_POST["email"];
                $password = $_POST["password"];
                $user = new Model_Users();
                $user->login($email, $password);
                echo "auth_user: " . $_SESSION["auth_user"];
            } else {
                $this->template->view('login');
            }
        }


    }