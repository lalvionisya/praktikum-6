<?php
function int_rom($num)
{
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $val = '';
    while ($num > 0) {
        foreach ($map as $rom => $int) {
            if ($num >= $int) {
                $num -= $int;
                $val .= $rom;
                break;
            }
        }
    }
    return $val;
}
echo(int_rom(9))
?>