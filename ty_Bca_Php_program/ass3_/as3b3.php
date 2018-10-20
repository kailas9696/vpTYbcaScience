<html>
<!
 B3.Write a PHP script to accept user preference like background color, text font, login message.
    On the next page display login message using the preferences.
!>
<body>
<form action="ass3b3.php" method="POST">
Enter the size:<input type="text" name="size"><br>
Enter the color:<input type="text" name="color"><br>
Enter the name:<input type="text" name="name"><br>
<input type="submit" value="submit">
<input type="reset" value="reset">
</form>
</body>
</html>


php file:-->ass3b3.php
<?php
$size=$_POST['size'];
$color=$_POST['color'];
$name=$_POST['name'];
echo $size;
echo "<br>$color<br>";

echo "$name<br>";

echo"<p style=color:".$color.";font-size:".$size. ";>".$name."</p>";
?>

