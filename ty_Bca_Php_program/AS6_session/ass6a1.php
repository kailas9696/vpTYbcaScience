A1. A web application that lists all cookies stored in the browser on clicking “list cookies” button,
add cookies if necessary.

<?php

if(isset($_COOKIE['accesses']))
$cnt = $_COOKIE['accesses'];
else
$cnt = 0 ;
setcookie('accesses', ++$cnt);
echo "You have visited this page $cnt times ";
?>
