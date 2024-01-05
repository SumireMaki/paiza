<?php
// B096:爆弾の大爆発
    // 標準入力を一行ずつ配列に代入
    while ($stdin = trim(fgets(STDIN))) {
        $stdin_array[] = $stdin;
    }
    
    for ($i = 0; $i = 0; $i++) {
        
    }
    // h行 w列
    list($h, $w) = explode(' ', $stdin_array[0]);
    $burst_info = array_slice(0, $stdin_array);
    
    // 全マス目
    $all_square = $h * $w;
    
    // 爆発したマス目
    $minus = 0;

    //i行目j列目
    for ($i = 0; $i = $h; $i++) {
        for($j = 0; $j <= $w; $j++){
            if(strpos($stdin_array[$i],'#') !== false || strpos($stdin_array[$j],'#') !== false){
                $minus += ($h - $i) + ($w - $j) - 1;
            }
        }
    }
    
    var_dump($minus);
?>