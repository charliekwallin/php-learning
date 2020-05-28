<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<body>

<ul>
    
    <?php foreach ($person as $feature => $value) : ?>
        <li><strong><?= $feature; ?></strong>: <?=$value ?></li>
    <?php endforeach; ?>

    

</ul>


</body>
</html>