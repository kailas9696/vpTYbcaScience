 <?php

$name=$_GET['name'];
$password=$_GET['password'];
$con=pg_connect("host='172.16.6.1' dbname='tybcaphp2' user='tybcaphp2' password=''");
if(!$con)
{
   echo "connection failed<br>";
}
else 
{
   echo "connection successful<br>";
}

$q=pg_query("select * from log");
$n=0;
while($row=pg_fetch_array($q))
{
    if($row['name']==$name && $row['password']==$password)
    $n=1;
}
if($n==0)
echo "invalid username or password<br>";
else
echo "valid username and password<br>";
?>
