<?php

class Task {
    // class propertie
    public $description;
    public $completed = false;

    // method
    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete() 
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

}

$task = new Task("Buy beer");

$task-> isComplete();

$tasks = [
    new Task("Fill up bike tires"),
    new Task("Get through pandemic"),
    new Task("Practice concertina")
];

$tasks[1]->complete();

require 'index.view.php';
