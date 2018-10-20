
<?php

      /*Write Ajax program to print Movie details by selecting an Actor’s name.
        Create table MOVIE and ACTOR as follows with 1 : M cardinality
        MOVIE (mno, mname, release_yr) and ACTOR(ano, aname)*/

  $conn=pg_connect("host='172.16.6.1' dbname='tybcaphp6' user='tybcaphp6' password=' '");
if(!$conn)
{
echo"connection failed";
}
else
{
echo"connected successfully";
}
$a_name   =   $_GET['a_name'];
      
         $q = pg_query("select movie111.m_no,m_name,release_year from movie111,actor11 where a_name='$a_name' and movie111.m_no=actor11.m_no");  

         echo "<table border=1>";
         echo "<tr><th>movie_no</th><th>movie_name</th><th>release_year</th></tr>";

        while($result=pg_fetch_array($q))
{
                     echo "<tr>";
                     echo "<td>".$result[0]."</td>";
                     echo "<td>".$result[1]."</td>";
                     echo "<td>".$result[2]."</td>";
                     echo "</tr>";
         
}
         echo "</table>";
?>
