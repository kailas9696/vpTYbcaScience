AQ2) Consider the following entities and their relationships
Doctor (doc_no, doc_name, address, city, area)
Hospital (hosp_no, hosp_name, hosp_city)
Doctor and Hospital are related with many-many relationship. Create a RDB in 3 NF for the
above and Using above database, write a PHP script which accepts hospital name and
print information about doctors visiting / working in that hospital in tabular format.<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
enter the doc<input type="text" name="hos">
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$x=$_GET['hos'];
$con=pg_connect("host='172.16.6.1' dbname='tybcaphp7' user='tybcaphp7' password=''");
if(!$con)
{
echo "An error occured";
}
else
{
echo"connection sucessfully";
}
$A=pg_query($con,"select * from doc");
$B=pg_query($con,"select * from hos");
$C=pg_query($con,"select * from d_h");
$D=pg_query($con,"select * from hos,doc,d_h where doc.dno=d_h.dno and hos.hno=d_h.hno and hname='$x';");



echo"<table>
<tr><th>dno  </th>
<th> dname </th>
<th> add </th>
<th> city </th>
<th> area </th>
</tr>";
while($r=pg_fetch_array($D))
{
echo"<tr><td> ".$r['dno']."</td>
<td> ".$r['dname']."</td>
<td> ".$r['add']."</td>
<td> ".$r['city']."</td>
<td> ".$r['area']."</td>
</tr>";
}
echo"</table>";

?>
