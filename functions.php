<?php

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
