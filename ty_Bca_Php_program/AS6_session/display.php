<?php
$pno=$_GET['pno'];
$name=$_GET['name'];
 $premium=$_GET['premium'];
if(isset($_COOKIE['ename'])&&isset($_COOKIE['address'])&&isset($_COOKIE['mobile']))
{
echo"<br><b>Employee Details </b><br>";
echo"Employee Name : ".$_COOKIE['ename']." <br>";
 echo"Employee Address :".$_COOKIE['address']."<br>";
echo"Mobile No. : ".$_COOKIE['mobile']."<br>";
echo"<br><b>LIC Policy Details</b><br>";
echo"Policy No. : $pno<br>";
 echo"Policy Name : $name<br>";
echo"Premium : $premium";
  }
?>
