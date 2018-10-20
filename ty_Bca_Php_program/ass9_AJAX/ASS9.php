<?php
$ob=$_GET['pname'];
$xml = simplexml_load_file("ass8b3.xml");
echo $xml->getName() . "<br />";
foreach($xml->children() as $child)
{

if($child->player==$ob){
echo $child->player."<br>$child->runs<br> $child->wickets<br> $child->noofnotout";


}

}
?>

