<?php
    // Dランク早解きセット　ボーダー柄
    $n = rtrim(fgets(STDIN));
    $n1 = str_repeat('#', 10);
    $n2 = str_repeat('.', 10);
    for ($i = 1; $i <= $n; $i++) {
        echo $n1 . "\n";
        echo $n2 . "\n";
    }
?>