AQ 4) Consider the following entities and their relationships
Movie (movie_no, movie_name, release_year)
Actor (actor_no, name)
Relationship between movie and actor is many – many with attribute rate in Rs. Create a RDB
in 3 NF for the above and using above database, write PHP scripts for the following:(Hint:
Create HTML form having three radio buttons)
Accept actor name and display the names of the movies in which he has acted.
Insert new movie information.
Update the release year of a movie. (Accept the movie name from user)
<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
movie name<input type="text" name="mname"><br>
actor name<input type="text" name="aname"><br>
<input type="radio" value="r1">accept actor name<br>
<input type="radio" value="r2">display movie name<br>
mno<input type="text" name="mno"><br>
movie name<input type="text" name="mname"><br>
mname<input type="text" name="r_year"><br>
<input type="radio" value="r3">insert new movie info<br>
<input type="submit" value="submit">
</form>
</body>
</html>


<?php
$y=$_GET['mno'];
$x=$_GET['mname'];
$a=$_GET['aname'];
$z=$_GET['r_year'];
$con=pg_connect("host='172.16.6.1' dbname='tybcaphp7' user='tybcaphp7' password=''");
if(!$con)
{
echo "An error occured";
}
else
{
echo"connection sucessfully";
}
$A=pg_query($con,"select * from movie");
$B=pg_query($con,"select * from actor");
$C=pg_query($con,"select * from mov_ac");

$D=pg_query($con,"select mname,aname from movie,actor,mov_ac where mov_ac.mno=movie.mno and mov_ac.ano=actor.ano and mname='$x'");
echo"<table>
<tr><th> mname </th>
<th> aname </th>
</tr>";
while($r=pg_fetch_array($D))
{
echo"<tr><td>  ".$r['mname']."</td>
<td> ".$r['aname']."</td>

</tr>";
}
echo"</table>";
$f=pg_query($con,"insert into movie values($y,'$x','$z')");
echo"<table>
<tr><th> mno </th>
<th> mname </th>
<th> r_year </th>
</tr>";
while($r=pg_fetch_array($f))
{
echo"<tr><tr> ".$r['mno']."</td>
<td>  ".$r['mname']."</td>
<td> ".$r['r_year']."</td>

</tr>";
}
echo"</table>";

?>

