<?php
$name=$_GET['name'];


$conn=pg_connect("host='172.16.6.1' dbname='tybcaphp10'  user='tybcaphp10' password=''");
if(!$conn)
{
echo "error";
}
else
{
echo "connection successfull";
}

$a=pg_query($conn,"select * from student where sname='$name';");

echo "<table>
     <tr><th>sno</th>
     <th>sname</th>
     <th>per</th></tr>";

while($r=pg_fetch_array($a))
{
echo "<tr><td>".$r['sno']."</td>"."<td>".$r['sname']."</td>"."<td>".$r['per']."</td></tr>";
}
echo "</table>";

?>

