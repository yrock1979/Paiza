<?php
    // Cランクスキルアップ問題 プレゼント当選
    $present = rtrim(fgets(STDIN));
    $pre = explode(' ', $present);
    for ($i = 1; $i <= $pre[0]; $i++) {
        if ($i % $pre[1] == 0 && $i % $pre[2] == 0 ) {
            echo 'AB' . "\n";
        } elseif ($i % $pre[1] == 0) {
            echo 'A' . "\n";
        } elseif ($i % $pre[2] == 0) {
            echo 'B' . "\n";
        } else {
            echo 'N' . "\n";
        }
    }
?>