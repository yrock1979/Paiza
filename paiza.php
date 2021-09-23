<?php
    // Dランク早解セット 靴のサイズ
    $size = rtrim(fgets(STDIN));
        echo number_format($size-18 , 1) . " " . sprintf("%.1f", $size-18.5) . "\n";
?>