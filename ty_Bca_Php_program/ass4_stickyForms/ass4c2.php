<html>
<head><title>client details</title></head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="POST">
enter the name:<br>
<input type="text" name="s1" value="<?php if(isset($_POST['s1'])) echo $_POST['s1']; ?>" >
select your choice:<br>
<input type="radio" name="ch" value="<?php if(isset($_POST['ch'])) echo $_POST['ch']; ?>" >male<br>
<input type="radio" name="ch" value="<?php if(isset($_POST['ch'])) echo $_POST['ch']; ?>" >Female<br>
select your quallification:<br>
<input type="checkbox" name="c1" value="hsc" <?php if(isset($_POST['c1'])) echo $_POST['c1']; ?> >hsc<br>
<input type="checkbox" name="c1" value="bsc" <?php if(isset($_POST['c1'])) echo $_POST['c1']; ?> >bsc<br>
<input type="checkbox" name="c1" value="bca"<?php if(isset($_POST['c1'])) echo $_POST['c1']; ?> >bca<br>
<input type="checkbox" name="c1" value="bba"<?php if(isset($_POST['c1'])) echo $_POST['c1']; ?> >bba<br>

<input type="submit" value="submit" name="submit">
</form>
<?php
if(isset($_POST['submit']))
{
 $s1=$_POST['s1'];
 $ch=$_POST['ch'];
 $c1=$_POST['c1'];
 echo"the student name is" .$s1;
 switch($ch)
{
 case 'male' :echo"gender is male";
              break;
 case 'female' :echo"gender is female";
               break;
}
if($c1=='hsc')
echo"the qualification is hsc";
if($c1=='bsc')
echo"the qualification is bsc";
if($c1=='bca')
echo"the qualification is bcs";
if($c1=='bba')
echo"the qualification is bba";
}
?>

</body>
</html>


