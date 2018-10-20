BQ 4) Considerer the following entities and their relationships
Student (Stud_id,name,class)
Competition (c_no,c_name,type)
Relationship between student and competition is many-many with attribute rank and year.
Create a RDB in 3NF for the above and solve the following.
Using above database write a script in PHP to accept a competition name from user and
display information of student who has secured 1st rank in that competition.
<?php
  $n=$_POST['ch'];
  
 $con=pg_connect("host='172.16.6.1' dbname='tybcaphp2' user='tybcaphp2' password=''");

 if(!$con)
 {
  echo "connection failed";
 }
 else 
 {
  echo "connection successful";
 }

$a=pg_query($con,"select student.sid,sname,class from student,comp,sc where student.sid=sc.sid and comp.cno=sc.cno and cname='$n' and rank=1;");
         print_r($a);
         echo"<table border=5>
         <tr><td>sid</td>
             <td>sname</td>
             <td>class</td></tr>";
        while($r=pg_fetch_array($a))
      {
  echo"<tr><td>".$r['sid']."</td>
           <td>".$r['sname']."</td>
            <td>".$r['class']."</td></tr>";
      }
 echo"</table>";
?>
