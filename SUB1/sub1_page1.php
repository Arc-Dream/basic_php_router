<?php
    if(isset($_POST['name2']))
    {
        $name2 = $_POST['name2'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/router_php/STATIC/CSS/style.css">
    <title>Document</title>
</head>

<script src="/router_php/STATIC/JS/script.js"></script>

<body>
    <h1>this is sub1 page 1</h1>

    <?= $name2 ?>

    
</body>
</html>