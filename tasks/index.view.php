<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>
    <h1>Tasks</h1>
<ul>
    <li><strong>Name: </strong> <?= $tasks['title']; ?> </li>
    <li><strong>Due: </strong> <?= $tasks['due']; ?> </li>
    <li><strong>Responsible: </strong> <?= $tasks['assigned_to']; ?></li>
    <li>
        <strong>Status: </strong>
            <!-- 
                Use when you want to write additional HTML that 
                would look messy with PHP 
            -->

             <?php if ($tasks['completed']) : ?>
                 <span class="icon">&#9989;</span>
            <?php else : ?>
                 Incomplete
            <?php endif ?>
    </li>
</ul>
   
</body>
</html>