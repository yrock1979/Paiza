<?php
    // Dランク早解きセット　縦書き
    $input_line = rtrim(fgets(STDIN));
    $num = mb_strlen($input_line);
    for ($i = 0; $i < $num; $i++) {
    echo mb_substr($input_line, $i, 1) . "\n";
}
?>