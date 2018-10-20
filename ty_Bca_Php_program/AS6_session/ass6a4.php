A4. Create a login form with a username and password. Once the user logs in, the second form
should be displayed to accept user details (name, city, phoneno). If the user doesn’t enter
information within a specified time limit, expire his session and give a warning otherwise
Display Details using sessions.
<html>
<body>
<form action="ass6a_4.php" method=get>
<input type='hidden' name='etime' value="<?php echo $t?>">
 Enter Name : <input type=textbox name=uname> <br>
 Enter City : <input type=textbox name=city><br>
 Enter Phone No :<input type=textbox name=pno><br>
<input type=submit name=submit value=DISPLAY>
</form>
</body>
</html>


<?php
session_start();
$t=date("1,d-m-y h:i:s",time()+20);

$_SESSION['etime']=$t;
if(isset($_REQUEST['name']))
//if(isset $_REQUEST['pwd']))
{
echo "Invalid Username Or Password";
}
?>
       
