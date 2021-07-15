<?php
$arr = array(1, 1, 2, 3, 4 - 51, 12, 12, 12, -51);
$count = 0;

for ($i = 0; $i < count($arr) - 1; ++$i) {
    if (current($arr) === next($arr)) {
        $count++;
    }
}

echo $count;
?>