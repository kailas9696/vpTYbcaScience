C.1) Write a PHP script for creating a self-processing page for a form. The form should allow the
user to enter the following attributes: Username, user city
preference(pune/Mumbai/Chennai/kolkata),user birth date, occupation, sex. If any of the
values is not entered by the user, the page is presented again with a message specifying the
attributes that are empty. Any form attributes that the user already entered, are set to the values
the user entered. The text of submit button changes from “create” to “continue”, when the user
is correcting the form. Display the details entered by the user on the next form

<html>
<body>
<form action="<?php echo$_SERVER['PHP_SELF'] ?>" method="POST">
enter the user name:<input type="text" name="name"><br>
enter the  user city preference(pune/Mumbai/Chennai/kolkata):<br>
<input type="text" name="add"><br>
enter the user birth date:<input type="text" name="dob"><br>
enter the user ocupation:<input type="text" name="oc"><br>
enter the user sex:<input type="text" name="gen"><br>
<input type="submit" name="submit" value="submit">
<input type="reset" name="reset" value="reset">


<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$add=$_POST['add'];
$dob=$_POST['dob'];
$gen=$_POST['gen'];
$oc=$_POST['oc'];
if(empty($name) )
{
 echo "<br>all fields are required ";
}
 else if(empty($add))
{
 echo "<br>all fields are required";
}
 else if(empty($dob))
{
 echo "<br>all fields are required";
}
else if(empty($gen))
{
echo "<br>all fields are required";
}
if(strlen($oc)>6)
{
echo"<br>error:<br>".$oc;
}
echo"<br>entered name:<br>".$name;
echo"<br>entered address:<br>".$add;
echo"<br>entered date of birth:<br>".$dob;
echo"<br>entered occupations:<br>".$oc;

echo"<br>entered gender:<br>".$gen;
}
?>
</body>
</html>


