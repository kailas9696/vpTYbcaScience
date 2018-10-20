B1. Write a PHP program to accept Name , address , Pincode ,Gender information. If any field is
blank , it display error message “all fields are required” . If pincode is more than 6 digits , it
should give error.B

<html>
<body>
<?php
$nameErr =$pincodeErr=$genderErr=$addressErr= "";
$name = $pincode=$gender=$address= "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST["name"]))
$nameErr = "Name is required";
else
$name= $_POST["name"];

if (empty($_POST["pincode"]))
$pincodeErr = "pincode is more then 6 digit required";
else
$pincode= $_POST["pincode"];

if (empty($_POST["address"]))
$addressErr = "address required";
else
$address= $_POST["address"];

if (!isset($_POST["gender"]))
$genderErr = "Gender is required";
else
$gender =$_POST["gender"];
}
?>

<h2>PHP Form Validation Example</h2>

<p><span class="error">Required field</span></p>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
Name: <input type="text" name="name" value="<?php if ($name) echo "$name";?>" >
<span class="error"><?php echo $nameErr;?></span>
<br><br>
pincode:<input type="text" name="pincode" value="<?php if ($pincode) echo "$pincode";?>" >
<span class="error"><?php echo $pincodeErr;?></span>
<br><br>
address:<input type="text" name="address" value="<?php if ($address) echo "$address";?>" >
<span class="error"><?php echo $addressErr;?></span>
<br><br>
<input type="radio" name="gender" value="female" <?php if($gender=="female") { echo "checked";
}?>>Female
<input type="radio" name="gender" value="male" <?php if($gender=="male") { echo "checked"; }?>>Male
<span class="error"><?php echo $gender;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
if($name && $gender && $pincode &&$address)
{
echo "$name<br>";
echo "$gender<br>";
echo "$pincode<br>";
echo "$address<br>";
}
?>
</body>
</html>

