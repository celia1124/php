<?php
setcookie("mycookie", "3064")
//cookie設定在html最前方
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $_COOKIE['mycookie'] ?>
</body>

</html>