AQ 1) Consider the following entities and their relationships
Emp (emp_no,emp_name,address,phone,salary)
Dept (dept_no,dept_name,location)
Emp-Dept are related with one-many relationship Create a RDB in 3NF for the above and
solve following
Using above database write a PHP script which will print a salary statement in the format
given below, for a given department. (Accept department name from the user).
Deparment Name :
Maximum Salary
Minimum Salary
Sum Salary
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
$A=pg_query($con,"select * from emp");
$B=pg_query($con,"select * from dept");
$a=pg_query($con,"select min(salary),max(salary),sum(salary) from emp,dept where emp.eno=dept.eno and dname='sci'");

echo"<table>
<tr><th> min </th>
<th> max </th>
<th> sum </th>
</tr>";
while($r=pg_fetch_array($a))
{
echo"<tr><td> ".$r['min']."</td>
<td> ".$r['max']."</td>
<td> ".$r['sum']."</td>
</tr>";
}
echo"</table>";

?>
