<?php

require 'Task.php';
require 'functions.php';

$pdo = connectToDB();
$tasks = fetchAllTasks($pdo);

require 'index.view.php';