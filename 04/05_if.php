<?php

echo '$numの値を入力してください: ';
$num = trim(fgets(STDIN));

// ここに処理を記述
$flg = true;
for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $flg = false;
        break;
    }
}

if ($flg) {
    echo $num . "は素数です。";
} else {
    echo $num . "は素数ではありません。";
}
