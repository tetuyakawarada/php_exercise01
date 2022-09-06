<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>02_form</title>
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo htmlspecialchars('私の名前は、' . $_POST['message'] . 'です', ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, 'UTF-8');
    }
    ?>

    <br><br>

    <a href="http://localhost/06/02_form.php">戻る</a>

</body>

</html>
