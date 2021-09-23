<?php
    // Dランク早解きセット　鉛筆の濃さ
    $pen = rtrim(fgets(STDIN));
    $pens = ["" , "6B", "5B", "4B", "3B", "2B", "B", "HB", "F", "H", "2H", "3H", "4H", "5H", "6H", "7H", "8H", "9H"];
    echo $pens[$pen];
?>