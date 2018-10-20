B3. Write a PHP script to create a form that accept theusers full name and their email addresses.
Use case conversion function to capitalize the first letter of each name, user submits and print
result back to browser. Check that the user’s email address contains the @ symbol.

<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
enter the name:<input type="text" name="name" >
enter the email:<input type="text" name="email" >
<input type="submit" name="submit">
</form>
</body>
</html>
 
<?php
if(isset($_POST['submit']))
{
$n=$_POST['name'];
echo ucfirst("$n");
$e=$_POST['email'];
if(strpos($e,"@")!==false)
{
echo $e;
}
else
{ 
echo "false";
}
}
?>
