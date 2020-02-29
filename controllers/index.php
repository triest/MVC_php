<?php

// контролер
    Class Controller_Index Extends Controller_Base
    {

        public $on_page = 3;
        // шаблон
        public $layouts = "first_layouts";

        // экшен
        function index()
        {
            /*$model = new Model_Users();
            $userInfo = $model->getUser();
            $this->template->vars('userInfo', $userInfo);
            $this->template->view('index');*/

            if (isset($_GET["page"])) {
                $page = $_GET["page"];
            } else {
                $page = 1;
            }

            global $mysqli;

            $sql = "select * from tasks ";
            $sql .= "limit $this->on_page";
            if ($page != 1) {
                $sql .= " offset " . strval($this->on_page * (int)$page - 1);
            }


            $result = $mysqli->query($sql);

            $task_array = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $task_array[] = Model_Task::get(intval($row['id']));
            }

            $sql = "select count(*) from tasks";

            $result = $mysqli->query($sql);
            $row = mysqli_fetch_assoc($result);
            $num_pages = intval(ceil($row["count(*)"] / $this->on_page));

            $this->template->vars('title', "Главная страница");
            $this->template->vars('tasks', $task_array);
            $this->template->vars('num_pages', $num_pages);
            $this->template->vars('page', $page);
            $this->template->view('index');
        }

    }