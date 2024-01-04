<?php
// B096:爆弾の大爆発

    // 標準入力を一行ずつ配列に代入
    while ($stdin = trim(fgets(STDIN))) {
        $stdin_array[] = $stdin;
    }
    
    // h行 w列
    list($h, $w) = explode(' ', $stdin_array[0]);
    
    // 全マス目
    $all_square = $h * $w;