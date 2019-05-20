<?php

$all_pic = 80;
$felt_pen = 23;
$pencil = 40;

$paints = $all_pic - $felt_pen - $pencil;

echo "На школьной выставке $all_pic рисунков ";
echo "из них $felt_pen выполнены фломастерами $pencil карандашами, а остальные красками";

echo "<br> Сколько рисунков, выполнено красками, на школьной выставке? - $paints";