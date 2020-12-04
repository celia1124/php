<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- php for迴圈不用大括號時使用冒號 php for ($i = 0; $i < 10; $i++) : ?> -->

<body>
    <table border="1">
        <?php for ($i = 1; $i < 10; $i++) : ?>
            <tr>
                <?php for ($k = 1; $k < 10; $k++) : ?>
                    <td>
                        <?php printf("%s*%s=%s", $i, $k, $k * $i); ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>

<!--printf(....%s...%s), $a,$b 字串套入