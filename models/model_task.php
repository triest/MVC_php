<?php

// модель
    Class Model_Task
    {

        protected $table = "tasks";

        public $name;
        public $email;
        public $text;
        public $status;

        /**
         * Model_Tasks constructor.
         * @param string $table
         */
        public function __construct($name = null, $email = null, $text = null)
        {
            $this->name = $name;
            $this->email = $email;
            $this->text = $text;
        }

        public static function get($id)
        {
            global $mysqli;

            if ($stmt = $mysqli->prepare("select `id`,`name`,`text`,`email` from `tasks` where `id`=? limit 1")) {
                $stmt->bind_param('s', $id);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result && $result->num_rows > 0) {
                    $task = new Model_Task();
                    while ($row = $result->fetch_assoc()) {
                        $task->id = $row["id"];
                        $task->name = $row["name"];
                        $task->email = $row["email"];
                        $task->text = $row["text"];
                    }
                    return $task;
                }
            } else {
                return null;
            }
        }

        public function save()
        {
            global $mysqli;


            $sql = 'INSERT INTO `tasks`( `name`, `email`, `text`) VALUES ("' . $this->name . '","' . $this->email . '","' . $this->text . '")';
            if (!$result = $mysqli->query($sql)) {
                return false;
            } else {
                return true;
            }
        }


        public function getUser()
        {
            return array('id' => 1, 'name' => 'test_name');
        }

    }