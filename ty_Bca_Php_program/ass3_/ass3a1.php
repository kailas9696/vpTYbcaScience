<?php
 /*Assignment no--3
 A1.Write PHP script to display GATEWAY INTERFACE, Server Address, Server Name,
server software, server protocol.
 */
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['HTTPS'];
echo "<br>";
?>


/*output
/tybcaphp3/ass3a1.php
172.16.6.1
172.16.6.1

Notice: Undefined index: HTTP_REFERER in /typhp/tybcaphp3/ass3a1.php on line 8

Mozilla/5.0 (X11; Fedora; Linux i686; rv:47.0) Gecko/20100101 Firefox/47.0
/tybcaphp3/ass3a1.php
*/
