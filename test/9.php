<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .data {
            width: 20px;
            height: 20px;
            margin: 0
        }
    </style>

</head>

<body>
    <table>
        <?php for ($i = 0; $i < 16; $i++) : ?>
            <tr>
                <?php for ($j = 0; $j < 16; $j++) : ?>
                    <td class="data" style="background-color:#<?= sprintf("%x%x", $i, $j) ?>0;"></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>

    </table>

</body>

</html>