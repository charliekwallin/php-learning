<?php


// We need $query here because of the return value in the bootstrap.php file
$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';