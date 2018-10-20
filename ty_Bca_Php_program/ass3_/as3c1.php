<html>
<!
 C1.A college has given roll number to each student, The roll number is six digit number where
    first two digits are faculty(B.Sc., BCA, BA) third digit is year (Ist(1), IInd(2) and IIIrd(3)) and
    last three digit are actual number. Write PHP script to accept a number and print faculty, year
    and roll number of student.
!>
<body>
<form action="ass3c1.php" method="GET">
 enter the roll number:
<input type="text" name="roll_no"><br>
<input type="submit" value="submit"><br>
</form>
</body>
</html>


PHP file-->
<?php
$roll_no=$_GET['roll_no'];
echo "Your Roll Number Is :$roll_no<br>";
$fac=substr($roll_no,0,2);
if($fac==11)
echo "Faculty is B.Sc<br>";
else if($fac==12)
echo "Faculty is Bca<br>";
else if($fac==13)
echo "Faculty is BA<br>";
$year=substr($roll_no,2,1);
if($year==1)
echo "Year is First Year<br>";
else if($year==2)
echo "Year is Second Year<br>";
else if($year==3)
echo "Year is Third Year<br>";
echo "Your Roll No. is".substr($roll_no,3)."<br>";
?>
