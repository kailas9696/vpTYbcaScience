
<html>
<!-Write PHP program to select list of subjects from list box and display selected subject on
information. (Use sticky multi-valued parameter)!>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="GET">
enter the string<input type="text" name="str1"><br>
<input type="submit" value="submit">
</form>
<?php
if(isset($_GET['submit']))
{
$str=$GET['str'];
$nstr=strrev($str);
echo "<br>".$nstr;
}
?>
</body>
</html>
