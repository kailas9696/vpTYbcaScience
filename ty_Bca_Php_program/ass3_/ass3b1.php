<html>
<!
 B1.Write a PHP Program to display all Server information in table format.
!>
<body>
<table border="4">
<tr><td><?php echo $_SERVER['PHP_SELF']; ?></td></tr>
<tr><td><?php echo $_SERVER['SERVER_NAME']; ?></td></tr>
<tr>
<td><?php echo $_SERVER['HTTP_HOST']; ?></td></tr>
<tr>
<td><?php echo $_SERVER['HTTP_REFERER']; ?></td></tr>
<tr><td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td></tr>
<tr><td><?php echo $_SERVER['SCRIPT_NAME']; ?></td></tr>
</table>
</body>
</html>

/*output
/tybcaphp3/ass3b1.php
172.16.6.1
172.16.6.1

Notice: Undefined index: HTTP_REFERER in /typhp/tybcaphp3/ass3b1.php on line 12
Mozilla/5.0 (X11; Fedora; Linux i686; rv:47.0) Gecko/20100101 Firefox/47.0
/tybcaphp3/ass3b1.php
*******************************************************************************/
