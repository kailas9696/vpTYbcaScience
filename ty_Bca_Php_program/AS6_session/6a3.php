<?php
/*Write a script to keep track of number of times the web page has been accessed using session.
*/
if(isset($_COOKIE['accesses']))
$cnt = $_COOKIE['accesses'];
else
$cnt = 0 ;
setcookie('accesses', ++$cnt);
echo "You have visited this page $cnt times ";
?>
