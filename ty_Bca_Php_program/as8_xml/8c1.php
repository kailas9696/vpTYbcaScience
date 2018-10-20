<?php
$xml=simplexml_load_file("8c1.xml");

foreach($xml as $x){

if($x->attributes()=='c'){

echo $x->attributes().":Language<br>Appeared:".$x->appeard."<br> Creater:";
echo $x->creator."<br>";
}
}
?>
