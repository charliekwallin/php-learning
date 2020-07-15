<?php require('partials/head.php'); ?>

<h1>Add a Task</h1>

<form method="POST" action="add-task">
    <p>
        <label for="description">Description</label><br>
        <input type="text" name="description">
    </p>

    <p>
        <label for="completed">Completed</label><br>
        <input type="text" name="completed">
    </p>

    <p>
        <button type="submit">Add task</button>
    </p>
</form>

<?php require('partials/foot.php'); ?>