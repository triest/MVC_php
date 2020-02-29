<?php

// модель
    Class Model_Task
    {

        protected $table = "tasks";
        public $id = null;
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

            if ($stmt = $mysqli->prepare("select `id`,`name`,`text`,`email`,`status` from `tasks` where `id`=? limit 1")) {
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
                        $task->status = $row["status"];
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

            if ($this["id"] != null) {
                $this->update();
            }

            $sql = 'INSERT INTO `tasks`( `name`, `email`, `text`) VALUES ("' . $this->name . '","' . $this->email . '","' . $this->text . '")';
            if (!$result = $mysqli->query($sql)) {
                return false;
            } else {
                return true;
            }
        }

        public function update()
        {
            global $mysqli;
            if ($stmt = $mysqli->prepare("UPDATE `tasks` SET `text` = ?,`name`=?,`email`=?,`status`=? WHERE `tasks`.`id` = ?")) {
                $stmt->bind_param('sssii', $this->text, $this->name, $this->email, $this->status, $this->id);
                $stmt->execute();
                $result = $stmt->get_result();
                return $result;
            }
            return false;
        }


        public function getUser()
        {
            return array('id' => 1, 'name' => 'test_name');
        }

    }