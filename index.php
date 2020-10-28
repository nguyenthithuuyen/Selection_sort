<?php
function selectionSort($list)
{
    for ($i = 0; $i < count($list) - 1; $i++) {
        $max = $i;
        for ($j = $i + 1; $j < count($list); $j++) {
            if ($list[$j] > $list[$max]) {
                $max = $j;
            }
        }
        if ($max != $i) {
            $temp = $list[$i];
            $list[$i] = $list[$max];
            $list[$max] = $temp;
        }
    }
    return $list;
}

$arr = [1, 9, 4.5, 6.6, 5.7, -4.5];
echo "Unsorted List:\n";
echo implode(' , ', $arr);
echo "<br>";
echo "<br>";
echo "Sorted List:\n";
echo implode(' , ', selectionSort($arr));