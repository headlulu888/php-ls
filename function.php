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

// Задача 2
function task2($operation, ...$params) {
    $str = "";

    foreach($params as $par) {
        $str .= $par . " + ";   
    }

    $str1 = rtrim($str, ' + ');

    return "Результат: " . $str1;
}

function task22($operation, ...$numbers) {
    if ($operation == '/' && in_array(0, $numbers)) {
        echo "Делить на 0 нельзя!";
        return null;
    }

    $all_variable_are_num = true;

    foreach ($numbers as $num) {
        if (!is_numeric($num)) {
            echo "Введите число!<br>";
            $all_variable_are_num = false;
            break;
        }
    }

    if (!$all_variable_are_num) {
        return "Неверный тип аргументов!";
    }

    $result = implode($operation, $numbers);

    echo "Результат: " . $result . " = " . eval('return ' . $result . ';');
}

?>