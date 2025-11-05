<html>
<body>
<form action="stmarks.php" method="get">
<center>Enter Marks</center><br>

OOSE: <input type="text" name="oose"><br><br>
DBMS: <input type="text" name="dbms"><br><br>
DCN: <input type="text" name="dcn"><br><br>
AWS: <input type="text" name="aws"><br><br>
DMDW: <input type="text" name="dmdw"><br><br>

<input type="submit" name="submit">
</form>
</body>
</html>

<?php
$min = 26;
$max = 70;
$rem = 0;
$pan = 0;

$oose = (int)$_GET['oose'];
$dbms = (int)$_GET['dbms'];
$dcn = (int)$_GET['dcn'];
$aws = (int)$_GET['aws'];
$dmdw = (int)$_GET['dmdw'];

$sub = array("OOSE", "DBMS", "DCN", "AWS", "DMDW");
$marks = array($oose, $dbms, $dcn, $aws, $dmdw);

echo "<table border=1>";
echo "<tr><th>s.no</th><th>subcode</th><th>subname</th><th>min marks</th><th>max marks</th><th>marks obtained</th><th>REMARKS</th></tr>";

for($i=0; $i<=4; $i++)
{
    if($marks[$i] < 26)
        $rem = "FAIL";
    else if($marks[$i] <= 70)
        $rem = "PASS";
    else
        $rem = "INVALID MARKS";

    echo "<tr><td>$i</td><td>$sub[$i]</td><td>$sub[$i]</td><td>$min</td><td>$max</td><td>$marks[$i]</td><td>$rem</td></tr>";
}

$sum = 0;
for($i=0; $i<=4; $i++)
    $sum = $sum + $marks[$i];

if($marks[0] > 70 || $marks[1] > 70 || $marks[2] > 70 || $marks[3] > 70 || $marks[4] > 70)
    $pan = "INVALID";
else if($marks[0] >= 25 && $marks[1] >= 25 && $marks[2] >= 25 && $marks[3] >= 25 && $marks[4] >= 25)
    $pan = "PASS";
else
    $pan = "FAIL";

echo "<tr><td colspan=4>Total</td><td>$sum</td><td colspan=2></td></tr>";
echo "<tr><td colspan=6>Result = $pan</td></tr>";
echo "</table>";
?>
