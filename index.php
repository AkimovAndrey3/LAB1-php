<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа 1</title>
</head>
<body>
<p>Составьте матрицу сравнений: выполните сравнения с помощью операторов обычного равенства и тождественного.</p>
<?php

$array1 = array(
        "",
    0,
    Null,
    "0",
    array(),
    true,
    false,
    1,
    "1",
    -1,
    "-1"
);

$array2 = array(
        "Пустая строка",
    "0 число",
    "Null",
    "0 строка",
    "Пустой массив",
    "True",
    "False",
    "1 число",
    "1 строка",
    "-1 число",
    "-1 строка"
);

for ($i = 0; $i < 11; $i++)
{
    for ($j = 0; $j < 11; $j++)
   {
       echo $array2[$i], " == ", $array2[$j], " ==> ", var_dump($array1[$i]==$array1[$j]),'<br>';
       echo $array2[$i], " === ", $array2[$j], " ==> ", var_dump($array1[$i]===$array1[$j]),'<br>';
   }
    echo '<br>';
}
?>

<p>−Написать цикл while, который будет выводить на экран все нечетные числа от 0 до 50.</p>
<?php
$number = 0;
while($number <= 50){
    if ($number % 2 != 0){
        echo $number, " ";
    }
    $number++;
}

print '<br>';
?>
<p>−Сделать то же самое с помощью цикла for.</p>
<?php
for ($i = 0; $i < 50; $i++){
    if ($i % 2 != 0 ){
        echo $i, " ";
    }
}

?>

</body>
</html>