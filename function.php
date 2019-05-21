<?php

// Задача 1 (fix)
function task1($array, $clue = false) {
    if ($clue == true) {
        $str = "";

        foreach($array as $arr) {
            $str .= $arr;
        }

        return $str;
    } else {
        foreach($array as $arr) {
            echo "<p>$arr</p>";
        }
    }
}

?>