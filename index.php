<?php
    $path = glob('./*');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($path as $p){ ?>
        <li><a href="/<?php echo $p ?>"><?php echo $p ?></a></li>
        <?php } ?>
    </ul>  
</body>
</html>