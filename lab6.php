<?php
require_once('config.php');
$text1 = "Дано дійсне число A і ціле число N (> 0). Знайти A в ступеню N:
A^N = A · A · ... · A
(Числа A перемножуються N разів). Вивести умову задачі,
початкові значення та результуючі";
$text2 = " Дано дійсне число A. Знайти кількість чисел Фібоначчі, сума яких не
перебільшує число A. Вивести умову задачі, початкові значення та результуючі.";
$a = 2.5; // початкове значення дійсного числа A
$n = 4; // початкове значення цілого числа N
$result = 1;
// множення числа A на себе N разів
for ($i = 0; $i < $n; $i++) {
  $result *= $a;
}
$a = 10; // початкове значення дійсного числа A
$count = 0;
$sum = 0;
// пошук чисел Фібоначчі, сума яких не перевищує число A
while ($sum <= $a) {
  $next = $fibonacci[count($fibonacci)-1] + $fibonacci[count($fibonacci)-2];
  $fibonacci[] = $next_fibonacci;
  $sum += $next_fibonacci;
  $count++;
}
$tpl_vars=array(
'text1' => $text1,
'a' => $a = 2.5,
'n' => $n = 4,
'result' => $result ,
'text2' => $text2,
'af' => $af,
'fibonacci' => $fibonacci,
'next_fibonacci' => $next_fibonacci,
'next' => $next,
'sum' => $sum,
);
$tpl_file='lab1-6.tmpl';
require_once('tpl_config.php');
?>