<html>
<head><title>client details</title></head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="POST">
enter the name:<br>
<input type="text" name="name">

Enter the priority details such as {HOUSE,MOBILE,TV,CAR} <br>
Enter the priority :<input type="text" name="p1"><br>
Enter the priority :<input type="text" name="p2"><br>
Enter the priority :<input type="text" name="p3"><br>

select the material status:
<input type="radio" name="r" value="r" >male<br>
<input type="radio" name="r" value="r1" >female<br>
select language you know:<br>
<input type="checkbox" name="c1" value="MARATHI" >MARATHI<br>
<input type="checkbox" name="c1" value="HINDI"  >HINDI<br>
<input type="checkbox" name="c1" value="ENGLISH" >ENGLISH<br>
<input type="checkbox" name="c1" value="TAMIL" >TAMIL<br>

<input type="submit" value="submit" name="submit">
<input type="reset" value="reset" name="reset">
</form>
<?php
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $p1=$_POST['p1'];
 $p2=$_POST['p2'];
 $p3=$_POST['p3'];
 $r=$_POST['r'];
 $c1=$_POST['c1'];
echo "<br>entered name:".$name;
echo "<br>entered property details  such as (tv,mobile ,house etc.)";
echo "<br>entered property:".$p1;
echo "<br>entered property:".$p2;
echo "<br>entered property:".$p3;
echo "<br>entered marital status:";
if($r=='r')
{
echo "<br>entered gender male";
}

if($r=='r1')
{
echo "<br>entered gender female";
}
if($c1=="c1")
{
echo "<br>marathi";
}
if($c1=="c1")
{
echo "<br>hindi";
}
if($c1=="c1")
{
echo "<br>english";
}
if($c1=="c1")
{
echo "<br>tamil";
}



}
?>
</body>
</html>




