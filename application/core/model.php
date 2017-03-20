<?php

class Model
{

    private function connect_db()
    {
        $pdo = new PDO('mysql:host=localhost; dbname=re_todolist', 're_todolist', 'root');
        return $pdo;
    }

    public function get_tasks()
    {
        $pdo = $this->connect_db();
        $statement = $pdo->query("SELECT * FROM tasks ");
        $tasks = $statement->fetchAll();
        return $tasks;
    }

    public function get_task_by_id($taskId)
    {
        $pdo = $this->connect_db();
        $statement = $pdo->query("SELECT * FROM tasks  WHERE id='" . $taskId . "'");
        $task = $statement->fetch(PDO::FETCH_ASSOC);
        return $task;
    }

    public function persist_task($fullName, $email, $taskTextarea, $taskImage)
    {

        $pdo = $this->connect_db();
        $query = "INSERT INTO tasks (name, email, task, image) VALUES('" . $fullName . "' , '" . $email . "', '" . $taskTextarea . "', '" . $taskImage . "')";

        $pdo->exec($query);
    }

    public function update_task($tastId, $taskTextarea, $taskDone)
    {

        $pdo = $this->connect_db();
        $query = "UPDATE tasks SET task = '" . $taskTextarea . "', done = '" . $taskDone . "' WHERE id='" . $tastId . "'";

        $pdo->exec($query);
    }


}