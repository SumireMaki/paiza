<?php
    // 標準入力を$stdin_arrayに格納
    while ($stdin = trim(fgets(STDIN))) {
        $stdin_array[] = $stdin;
    }
    
    // $stdin_array[0] h行 w列
    list($h, $w) = explode(' ', $stdin_array[0]);
    
    // $stdin_array[1]以降を爆発情報として格納
    $burst_info = [];
    for ($i = 1; $i <= $stdin_array[0]; $i++) {
        $burst_info[] = explode(' ', $stdin_array[$i]);
    }

    // 全マス目
    $all_square = $h * $w;
    
    // 爆発したマス目
    $minus = 0;
    
    //i行目j列目
    for ($i = 0; $i < $h; $i++) {
        for($j = 0; $j < $w; $j++){
            if(strpos(implode('', $burst_info[$i]), '#') !== false){
                $minus += ($h - $i) + ($w - $j) - 1;
            }
        }
    }
    
    // 配列[i]と[i+1]を比較
        for ($i = 0; $i < $burst_info; $i++) {
            if(strpos(implode('', $burst_info[$i]), '#') !== false){
                $burst_info[$i] = '####';
                $burst_info[$i+1] = 
            }
    }
    
    var_dump($minus);
?>