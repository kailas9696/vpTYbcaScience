A1. Write a PHP Program to Upload the file and display its information like name, size, type , etc.

<html><title>file uploads</title>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="POST">
<input type="file" name="file">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
echo $_FILES['file']['name'];
echo $_FILES['file']['type'];
echo $_FILES['file']['size'];
?>
