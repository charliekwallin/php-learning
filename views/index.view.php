<?php require('partials/head.php'); ?>

<h1>Submit your name</h1>

<form method="POST" action="/names">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php require('partials/foot.php'); ?>