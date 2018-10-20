B2. Write a PHP program to accept empno, name, pan card information, email . If any field is
blank , form should display error message “all fields are required”. Pan card number should
be 10 digits and First 5 characters should be letter , next 4 characters should be digit and last
character should be letter.

<html>
<head>
<style>
span.error {color: red;}
</style>
</head>
<body>
<?php
$nameErr = $feildErr = "";
$name = $feild = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST["name"]))
$nameErr = "Name is required";
else
$name = $_POST["name"];
if (!isset($_POST["feild"]))
$feildErr = "feild is required";
else
$feild =$_POST["feild"];
}
?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* Required field.</span></p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
<input type="radio" name="feild" value="feild"> 

empno: <input type="text" name="empno" value="<?php if ($empno) echo "$empno";?>" >
name: <input type="text" name="name" value="<?php if ($name) echo "$name";?>" >
pcard: <input type="text" name="pcard" value="<?php if ($pcard) echo "$pcard";?>" >
email: <input type="text" name="email" value="<?php if ($email) echo "$email";?>" >
<span class="error">* <?php echo $nameErr;?></span>
<br><br>

<span class="error">* <?php echo $feildrErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
if(pcard>=10)
{
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $empno;
echo $pcard;
echo $email;
}
?>
</body>
</html>
