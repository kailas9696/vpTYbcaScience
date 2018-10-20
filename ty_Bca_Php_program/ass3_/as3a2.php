<html>
<!
   A2.Write PHP program to accept user details such as user-id, name, Address, email, and
      mobile no. Display same information on next page.
!>
<body>
<form action="d1.php" method="POST">
Enter the user_id:<input type="text" name="n1"><br>
Enter the Name:<input type="text" name="n2"><br>
Enter the Address:<input type="text" name="n3"><br>
Enter the email:<input type="text" name="n4"><br>
Enter the MOBILE_NO:<input type="text" name="n5"><br>
<input type="submit" value="submit">
<input type="reset" value="reset">
</form>
</body>
</html>



php file-->d1.php..

<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$n5=$_POST['n5'];
echo"the USER_ID:".$n1."<br>";
echo"the NAME:".$n2."<br>";
echo"the ADDERESS:".$n3."<br>";
echo"the EMAIL:".$n4."<br>";
echo"the MOBILE_NO:".$n5."<br>";
?>


/*output
the USER_ID:11
the NAME:RAM
the ADDERESS:abc
the EMAIL:ram@gmail.com
the MOBILE_NO:1122334455
*/
