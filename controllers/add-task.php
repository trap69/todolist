<?php
use TaskManager\DB;
use TaskManager\Task;

if(isset($_POST['send'])){
    $connection = DB::connect();
    $task = new Task($connection);
    $task->createTask($_POST);
}else {
    require 'view/pages/add-task.view.php';
}
