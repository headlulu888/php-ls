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

// Задача 3
function task3($firstNum, $secondNum) {
    if (is_int($firstNum) && is_int($secondNum)) {
        echo "<table>";

        for($i = 1; $i <= $firstNum; $i++) {
            echo "<tr>";

            for($j = 1; $j <= $secondNum; $j++) {
                echo "<td style=\"border: 1px solid black;\">$j * $i = " . ($i * $j) . "</td>";
            }

            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Числа должны быть целыми!";
    }
}

// Задача 4
function task4() {
    $today = date("m.d.y H:i");
    $date = '24.02.2016 00:00:00';

    echo $today . "<br>";
    echo strtotime($date);
}

// Задача 5
function task5() {
    $str1 = 'Карл у Клары украл Кораллы';
    $str2 = 'Две бутылки лимонада';

    $newStr1 = str_replace('К', '', $str1);
    $newStr2 = str_replace('Две', 'Три', $str2);

    echo 'Была строка ' . $str1 . ' - ' . 'а стала ' . $newStr1 . "<br>";
    echo 'Была строка ' . $str2 . ' - ' . 'а стала ' . $newStr2;
}

// Задача 6
function task6($fileName) {
    $fileName = $fileName . 'txt';
    $fileText = "Hello again!";
    file_put_contents($fileName, $fileText);
    echo file_get_contents($fileName);
}

?>