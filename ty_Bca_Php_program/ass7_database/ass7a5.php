AQ5) Write a PHP program to accept username and password from the user. Validate it against the
login table in the database. If there is a mismatch between username and password, then, display the
error message as ―invalid user name and password; else display the message as ―Login successful
on the browser.
<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
enter the teacher id <input type="text" name="id"><br>
enter the teacher name <input type="text" name="name"><br>
enter the teacher add <input type="text" name="add"><br>
enter the teacher sub <input type="text" name="sub"><br>
<input type="radio" name="r1">update<br>
<input type="radio" name="r2">insert<br>
<input type="radio" name="r3">delete<br>
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
$m=$_GET['id'];
$x=$_GET['name'];
$r=$_GET['add'];
$s=$_GET['sub'];
$con=pg_connect("host='172.16.6.1' dbname='tybcaphp7' user='tybcaphp7' password=''");
if(!$con)
{
echo "An error occured";
}
else
{
echo"connection sucessfully";
}
$A=pg_query($con,"select * from teacher");
$b=pg_query($con,"update teacher set name='$x' where id=1");
echo"update a name sucessfully<br>";
$c=pg_query($con,"delete from teacher where name='$x'");
echo"delete a teache name sucessfully<br>";
$d=pg_query($con,"insert into teacher values($m,'$x','$r','$s')");
echo"insert the value sucessfully";

?>


