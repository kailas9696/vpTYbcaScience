 <?php
  $gm=$_GET['game'];

  $a=array("Cricket","Basket Ball","Kho-Kho","Tennis","Football");

  echo "<h3>List of Games<br></h3>";
  for($i=0;$i<count($a);$i++)
  {
              echo $a[$i]."<br>";
  }
?>

