<?php

function GCD($a, $b) {
echo '<br />';
echo "What is the Greatest Common Divisor of $a and $b?";
while ($b !== 0) {
echo '<br />';
echo "$b is greater than 0";
$temp = $b;
$b = $a % $b;
$whole_division = ($temp != 0) ? intval($a / $temp) : 0;
echo '<br />';
echo "After $a // $temp = $whole_division it remain: $b";
$a = $temp;
}
echo '<br />';
echo "We've found the GCD.";
echo '<br />';

return $a;
}

echo '<br />';
echo GCD(rand(0, 9999), rand(0, 9999));
echo '<br />';
echo GCD(rand(0, 9999), rand(0, 9999));
echo '<br />';
echo GCD(rand(0, 9999), rand(0, 9999));
