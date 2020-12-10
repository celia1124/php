
<?php

if (isset($_POST['account']) and isset($_POST['password'])) {
    if ($_POST['account'] === 'hello' and $_POST['password'] === '123') {
    } else {
        $errorMsg = 'mistake';
    }
}

// if (isset($_POST['account']) and isset($_POST['password'])) {
//     if ($_POST['account'] === 'shin' and $_POST['password'] === '1234') {
//         // 可以登入
//         $_SESSION['admin'] = 'shin';
//     } else {
//         $errorMsg = '帳號或密碼錯誤';
//     }
// }