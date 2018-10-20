

<?php
/*Write PHP program to select list of subjects from list box and display selected subject on
information. (Use sticky multi-valued parameter)*/

echo "you selected subjects are:";
echo"<br>";
foreach($_GET['subjects'] as $s)
{
echo "$s<br>";
}
?>      


<html>
<body>
<form action="ass4b5.php" method="GET">
<select multiple name="subjects[]">
<option value="cpp">cpp</option>
<option value="maths">maths</option>                
<option value="rdbms">rdbms</option>
</select>
<input type="submit" value="submit">
</form>
</body>
</html>
