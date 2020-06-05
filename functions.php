<?php

function connectToDB() {
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root','');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    
}

function fetchAllTasks($pdo) {
    $statement = $pdo->prepare("SELECT * FROM todos");
    $statement->execute();
    return $statement->fetchAll((PDO::FETCH_CLASS));
}

function dd($data) {
    echo '<pre>';
    die(var_dump(($data)));
    echo '</pre>';
}

function old_enough($age) {
    if ($age >= 21) {
        echo "Welcome!";
    }
    else {
        echo "You are not old enough";
    }
}
