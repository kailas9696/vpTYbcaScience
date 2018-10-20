<?php
$con=pg_connect("host='172.16.6.1' dbname='tybcaphp7' user='tybcaphp7' password=''");
if(!$con)
{
echo "An error occured";
}
else
{
echo"connection sucessfully";
}
$a=pg_query($con,"insert into stud values(1,'raj')");
$b=pg_query($con,"insert into stud values(2,'dev')");
$c=pg_query($con,"insert into stud values(3,'yug')");
$A=pg_query($con,"select * from stud");
echo"<table>
<tr><th> no </th>
<th> name </th>
</tr>";
while($r=pg_fetch_array($A))
{
echo"<tr><td> ".$r['sno']."</td>
<td>".$r['name']."</td></tr>";
}
echo"</table>";


?>
