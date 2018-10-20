



<html>
<! Write a PHP program to create a simple distance calculator that can accept distance in
meters from user. Convert it into centimeter or kilometer according to user preference(use
radio buttons and Self Processing form)!>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="GET">
distance in meter<input type="text" name="m"><br>
in centimeter<input type="radio" name="cm"><br>
in kilometer<input type="radio" name="km"><br>
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
if(isset($_GET['m']))
{
$m=$_GET['m'];
$cm=$_GET['cm'];
$km=$_GET['km'];

$cm=$m/1000;
echo $cm;

$km=$m*1000;
echo $km;
}
?>
