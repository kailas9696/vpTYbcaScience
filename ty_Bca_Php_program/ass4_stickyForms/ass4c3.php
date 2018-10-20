<!-Write a PHP script to accept a string and then display each word of string in reverse order.
(use concept of self processing form)!>

<html>

<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
enter the string<input type="text" name="str1"><br>
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$str=$_POST['str1'];
$nstr=strrev($str);
echo "<br>".$nstr;
}
?>

