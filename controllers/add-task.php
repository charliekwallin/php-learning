<?php

$description = $_POST['description'];
$completed = $_POST['completed'];

$new_task = [
    $description,
    $completed
];

try{
    $tasks = App::get('database')->insert('todos', $new_task);
    header('Location: /');
    //header("Location: http://" . $_SERVER['HTTP_HOST']. "/controllers/index.php");
    //TODO: add success message
   //TODO: Redirect
} catch (Exception $e) {    
    echo $e->getMessage() . '<br>';
}
    

