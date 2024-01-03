<?php
//C034:先生の宿題
    $input_line = trim(fgets(STDIN));
    $formula = explode(' ', $input_line);
    $result = 0;
    list($a, $op, $b, $eq, $c) = $formula;
    if($a == "x"){
        $result = ($op == "+") ? $c - $b : $c + $b;
    }elseif ($b == "x") {
        $result = ($op == "+") ? $a - $c : $a - $c;
    }elseif($c == "x"){
        $result = ($op == "+") ? $a + $b : $a - $b;
    }
    echo $result;