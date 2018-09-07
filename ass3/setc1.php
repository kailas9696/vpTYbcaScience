<?

// 2. A college has given roll number to each student, The roll number is six digit number where first two digits are faculty(B.Sc., BCA, BA) third digit is year (Ist(1), IInd(2) and IIIrd(3)) and last three digit are actual number. Write PHP script to accept a number and print faculty, year and roll number of student

?>


<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='get'>
<table>
<tr>
<td>Enter Your Roll No. </td><td><input type=text name=roll_no placeholder="ex. 112001"><input type=Submit value="Submit"></td>
</tr>
<tr>
<td></td><td><font color="red" size="20">format of Roll No: first two digits is 11 for B.sc., 12 for Bcom, 13 for BA<br>third digit 1/2/3 for respective year<br>last three are for actual roll no.</font></td>
</tr>
</table>
</form>
</body>
</html>



<?php


if(isset($_GET['roll_no'])){

	$roll_no=$_GET['roll_no'];

	echo "Your Roll Number Is :$roll_no<br>";
	$fac=substr($roll_no,0,2);
	if($fac==11)
	echo "Faculty is B.Sc<br>";
	else if($fac==12)
	echo "Faculty is Bcom<br>";
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

}

?>
