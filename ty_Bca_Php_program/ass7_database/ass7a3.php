AQ3)Consider the following entities and their relationships
Item (item_no, Item_name, qty)
Supplier(supp_no, supp_name, address, city, phoneno)
Item and Supplier are related with many–many relationship with rate and discount as the
attribute of relationships.
Create a RDB in 3 NF for the above and using above database, write a PHP script, Create a
login form, after validating user name and password give option to 1) Add item 2) Search for
an item by name
<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
salary<input type="text" name="sal">
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$x=$_GET['sal'];
$con=pg_connect("host='172.16.6.1' dbname='tybcaphp7' user='tybcaphp7' password=''");
if(!$con)
{
echo "An error occured";
}
else
{
echo"connection sucessfully";
}
$A=pg_query($con,"select * from dep");
$B=pg_query($con,"select * from empp");
$C=pg_query($con,"select * from empp where  sal>$x");
echo"<table>
<tr><th> eno </th>
<th> ename </th>

<th> sal</th>
<th> dno </th>

</tr>";
while($r=pg_fetch_array($C))
{
echo"<tr><td> ".$r['dno']."</td>
<td> ".$r['eno']."</td>
<td> ".$r['ename']."</td>
<td> ".$r['sal']."</td>
<td> ".$r['dno']."</td>


</tr>";
}
echo"</table>";

?>
