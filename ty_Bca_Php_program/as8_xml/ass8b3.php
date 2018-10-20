Q b3Write a PHP script to accept an XML file which should comprise the following:
<cricket>
<player>abc</player>
<runs>1000</runs>
<wickets>50</wickets>
<noofnotout>10</noofnotout>
</cricket>
For at least 5 players. Display the details of players who have scored more than 1000 runs and at least
50 wickets.


<?php
$xml = simplexml_load_file("ass8b3.xml");
foreach($xml->children() as $x)
{
echo $x->getname();
//echo $x->attributes();
foreach($x->children() as $k=>$v)
{
echo $k."<br>";
foreach($v
}
}

?>

