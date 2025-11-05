<html>
<body>
<form action="cook.php" method="get">
Name: <input type="text" name="name"><br>
<input type="submit" name="submit" value="Create Cookie">
</form>
</body>
</html>

<?php
if (isset($_GET['name']))
{
    $name = $_GET['name'];
    setcookie("ename", $name, time() + 3600);
    echo "Cookie created.<br>";
}

if (isset($_COOKIE['ename']))
{
    echo "Your cookie value: " . $_COOKIE['ename'];
}
?>
