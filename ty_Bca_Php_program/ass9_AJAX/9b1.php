<?php
$n=$_GET['ename'];

$con=pg_connect("host='172.16.6.1' dbname='tybcaphp2' user='tybcaphp2' password=''");
if(!$con)
{
   echo "connection failed<br>";
}
else 
{
   echo "connection successful<br>";
}

$a=pg_query($con,"select * from emp1 where ename='$n';");
   print_r($a);
      echo"<table border=5>
         <tr><td>eno</td>
             <td>ename</td>
             <td>designation</td>
             <td>salary</td></tr>";
        while($r=pg_fetch_array($a))
      {
          echo"<tr><td>".$r['0']."</td>
                   <td>".$r['1']."</td>
                  <td>".$r['2']."</td>
                   <td>".$r['3']."</td></tr>";
      }
 echo"</table>";
?>
