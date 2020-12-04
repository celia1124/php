<!doctype html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        td {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>
    <table>
        <?php for ($i = 0; $i < 16; $i++) : ?>
            <tr>
                <?php for ($j = 0; $j < 16; $j++) : ?>
                    <td style="background-color: #<?php printf("%x%x", $i, $j) ?>0;"> </td>

                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>


    <table>
        <?php for ($i = 0; $i < 16; $i++) : ?>
            <tr>
                <?phpfor($j=0,$j<16,$j++):?>
                <td style="background-color: # <?php printf("%x%x", $i, $j) ?>0;"></td>
                <td style="background-color: #<?php printf("%x%x", $i, $j) ?>;"></td>
            </tr>
        <?php endfor; ?>
    </table>

</body>

</html>