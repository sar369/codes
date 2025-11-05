<html>
<body>
<h2><center>STUDENT REGISTRATION FORM</center></h2>

<form action="stureg.php" method="post">
Name: <input type="text" name="name"><br>
Email: <input type="text" name="email"><br>
Phno: <input type="text" name="phno" maxlength="10"><br>
City: <input type="text" name="city"><br>

Gender:<br>
<input type="radio" name="gen" value="m">Male
<input type="radio" name="gen" value="f">Female<br><br>

Hobbies:<br>
<input type="checkbox" name="hob[]" value="blogging">Blogging<br>
<input type="checkbox" name="hob[]" value="reading">Reading<br>
<input type="checkbox" name="hob[]" value="listening music">Listening music<br><br>

Password: <input type="password" name="pwd"><br><br>

<input type="submit" name="submit" value="Register">
</form>
</body>
</html>

<?php
echo "STUDENT REGISTRATION DETAILS ARE:<br><br>";

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phno = $_POST['phno'];
    $city = $_POST['city'];
    $gen = $_POST['gen'];
    $hob = $_POST['hob'];
    $pass = $_POST['pwd'];

    echo "Name: $name<br>";
    echo "Mail id: $mail<br>";
    echo "Phone: $phno<br>";
    echo "City: $city<br>";
    echo "Gender: ";

    if ($gen == "f")
        echo "Female<br>";
    else
        echo "Male<br>";

    echo "Hobbies:<br>";
    $i = 0;
    while ($i < count($hob))
    {
        echo $hob[$i] . "<br>";
        $i++;
    }
}
?>
