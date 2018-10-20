<?php

interface findarea
{
 function area();
}

class rectangle implements findarea
{ 
 public $ln;
 public $b;
  public function __construct($l,$c)
 {
  $this->ln=$l;
   $this->b=$c;
 }
  function area()
  {
   $area  =  $this->ln*$this->b;
   echo "Area of Rectanle :".$area."<br>";          
  }
}

class square extends rectangle
{
public $si;
public function __construct($s)
 {
  $this->si=$s;
}
  function area()
  {
   $area  =  $this->si*$this->si;
   echo "Area of Square :". $area."<br>";           
  }
}

class circle
{
public $ra;
public function __construct($r)
 {
  $this->ra=$r;
}
  function area()
  {
   $area  =  0.5*$this->ra*$this->ra;
   echo "Area of Circle :". $area."<br>";  
  }
}

$fr  =  new rectangle(3,2);
$fr->area();

$fs  =  new square(5);
$fs->area();

$fc  =  new circle(6);
$fc->area()
?>




