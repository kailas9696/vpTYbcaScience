A2. Write a PHP program to store current date-time in a COOKIE and display the ‘Last visited on’
date-time on the web page upon reopening of the same page.

<?php
if(isset($_COOKIE['datee']))
{
$cookieData = $_COOKIE['datee'];
}
$today = getdate();
$d = $today['mday'];
$m = $today['mon'];
$y =  $today['year'];
$datestring = "$d - $m - $y"; 
setcookie("datee", $datestring);
echo "Last visited on date-time:- $cookieData";
?>

