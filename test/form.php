<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<!-- 使用GET/POST取得輸入值,使用post需在form表單上加上method="post" post不會將值顯示於網址欄位-->

<body>
    <pre>
         <?php
            print_r($_POST)
            ?>

    </pre>
    <form action="jason.php" method="post">
        <input type="text" name="account" placeholder="帳號"><br>
        <input type="password" name="password" placeholder="密碼">

        <input type="submit"><br>
    </form>
    <script>

    </script>
</body>

</html>