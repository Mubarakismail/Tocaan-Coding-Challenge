<?php

$arr = [
    ['red', 'black', 'blue'],
    ['large', 'medium', 'small'],
    ['Cotton', 'Polyester'],
];
$arr_size = sizeof($arr);

global $res;
$res = [];

function valid($r, $c, &$arr)
{
    return ($r >= 0 && $r < sizeof($arr) && $c >= 0 && $c < sizeof($arr[$r]));
}
function solve($r, $c, $tst = [], &$arr)
{
    if (!valid($r, $c, $arr))
        return;
    array_push($tst, $arr[$r][$c]);
    if (sizeof($tst) == sizeof($arr))
        array_push($GLOBALS['res'], $tst);
    solve($r + 1, 0, $tst, $arr);
    array_pop($tst);
    solve($r, $c + 1, $tst, $arr);
}

solve(0, 0, [], $arr);

var_dump($res);

echo sizeof($res);
