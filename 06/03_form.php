<?php

$age = '';
$err_age = '';
$str = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $age = $_POST['message'];

    if (empty($age)) {
        $err_age = '年齢を入力してください';
    }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>03_form</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <?php if ($err_age) : ?>
                <ul>
                    <li><?= $err_age ?></li>
                </ul>
            <?php endif; ?>
            <label for="">年齢</label><br>
            <input type="text" name="message">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <div>
        <br>
        <?php
        $str = htmlspecialchars('私は' . $age . '歳です', ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, 'UTF-8');
        echo $str;
        ?>
    </div>
</body>

</html>
