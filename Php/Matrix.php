<?php
$a = array(array(3,1), array(1,1));
$b = array(array(1,2), array(3,1));

$m = count($a);
$n = count($a[0]);
$p = count($b);
$q = count($b[0]);

if ($n != $p)
{
    echo "Multiplication is not possible";
}
else
{
    for ($i = 0; $i < $m; $i++)
    {
        for ($j = 0; $j < $q; $j++)
        {
            $c[$i][$j] = 0;
            for ($k = 0; $k < $n; $k++)
            {
                $c[$i][$j] = $c[$i][$j] + $a[$i][$k] * $b[$k][$j];
            }
        }
    }

    echo "Matrix multiplication is:<br>";
    for ($i = 0; $i < $m; $i++)
    {
        for ($j = 0; $j < $q; $j++)
        {
            echo $c[$i][$j] . " ";
        }
        echo "<br>";
    }
}
?>
