<?php

function factorial($num) {
    if ($num == 0) return 1;
    return $num * factorial($num - 1);
}

echo factorial(1);
echo '<br/>';
echo factorial(2);
echo '<br/>';
echo factorial(3);
echo '<br/>';
echo factorial(4);
echo '<br/>';
echo factorial(5);
echo '<br/>';
