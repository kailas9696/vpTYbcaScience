BQ3)Consider the following entities and their relationships.
Employee (Emp_no, Emp_name, Basic_sal)
Dept (Dept_no, Dept_name)
Employee and Dept are related with many–one relationship.
Create a RDB in 3 NF for the above .
Using above database write a PHP script for the following to display the employees earning
salary greater than user define salary. (accept salary from user).
<?php
$conn=pg_connect("host='172.16.6.1' dbname='tybcaphp11' user='tybcaphp11' password=''");
if(!$conn)
{
echo"error occured";
}
else 
{
echo "connected sucessfull";
}

$result=pg_query($conn,"select sal,ename from emp where sal>5000;");
print_r($result);
echo "<table border=5>

    <tr><th>ename</th>
<th>salary</th></tr>";
while($r=pg_fetch_array($result))
{
echo"<tr><td>".$r['sal']."</td></tr>";
}
echo "<table>";
?>
