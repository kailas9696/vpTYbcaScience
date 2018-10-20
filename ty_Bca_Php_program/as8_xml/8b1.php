<?php
echo"links data posted";
$ele=$_GET['title'];
$ele1=$_GET['ryear'];
$xmltags="<?xml version='1.0' ?>";
$xmltags=$xmltags."<cdstore>";
$xmltags=$xmltags."<movie>";
$xmltags=$xmltags."<title>"; 
$xmltags=$xmltags.$ele;
$xmltags=$xmltags."</title>"; 
$xmltags=$xmltags."<releaseyear>";
$xmltags=$xmltags.$ele1;
$xmltags=$xmltags."</releaseyear>";
$xmltags=$xmltags."</movie>";
$xmltags=$xmltags."</cdstore>";
if($fp=fopen("cd.xml","w"))
{
    if($wt=fwrite($fp,$xmltags))
    {
       echo "file created";
     }
    else
        
         echo"not created file";
 }     
  else
     echo "not opened";


?>
