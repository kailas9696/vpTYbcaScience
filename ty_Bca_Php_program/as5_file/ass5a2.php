A2. Write a PHP program to accept student information like name, address, class and Upload
student photo and display same on form.

<html>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
Enter the name:
<input type="text" name="n1"><br>
Enter the address:
<input type="text" name="n2"><br>
Enter the Class:
<input type="text" name="n3"><br>
upload student photo:
<input type="file" name="file1" id="file1">
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['n1'];
$add=$_POST['n2'];
$class=$_POST['n3'];
$f=$_FILES['file1'];
?>
<img src="<?php echo $_FILES['file1']['name']; ?>" alt='abc' width="150" height="140" ><br><br>

<?php
echo "name of student is:" .$name."<br>";
echo "address of student is:" .$add."<br>";
echo "class of student is:" .$class."<br>";

if(isset($_FILES['file1']))
{
  echo $_FILES['file1']['name'];
  echo "<br>";
}
}
?>
</body>
</html>
