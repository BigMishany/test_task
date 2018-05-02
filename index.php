<?php

require('index.html');

$array=explode($_POST['delimiter'],$_POST['array']);
$maxing=$array[0];
$max_ind=0;

for($i=1;$i<=count($array);$i++)
{

    if ($maxing<$array[$i])
    {
        $maxing=$array[$i];
        $max_ind=$i;

    }
}
echo('Максимальное число: '.$maxing);
echo('</br>');
echo('Индекс максимального числа: '.$max_ind);
?>