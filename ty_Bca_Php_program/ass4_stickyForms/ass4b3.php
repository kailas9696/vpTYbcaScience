<?php 
$p=$_POST['principle'];
$r=$_POST['rate'];
$ti=$_POST['time'];

 $si = ($p*$r*$ti)/100;
 echo "Simple Interest : ".$si;
 

   ?>
