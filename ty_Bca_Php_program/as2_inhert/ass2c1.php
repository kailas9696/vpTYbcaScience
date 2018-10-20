Q.Create an interface for the classes that handle cars, having methods to setModel() and
getModel() methods. Create another interface Vehicle having setHasWheels($bool) and
getHasWheels() methods which is boolean. Create class miniCar with two properties model
and hasWheels property and implement the two interfaces.


<?php
interface Car
{
public function setmodel($name);
public function getmodel();
}

interface Vehicle
 {
  public function setHasWheels($bool); 
 
  public function getHasWheels();
}

class Minicar implements Car, Vehicle 
{
  public $model; 
  public $hasWheels; 
  
 public function setmodel($name)
  { 
     //echo $this->model ; 
      $this->model=$name;
   return $name;
       
  }
  
 public function getmodel()
  {
   echo "<br>The model is : ".$this -> model."<br><br>";
}
  
 public function setHasWheels($bool)
  { 
    $this -> hasWheels = $bool; 
  }
  
 public function getHasWheels()
  {
   
   if($this -> hasWheels > 0)
   {
    echo "The Wheels are present ".$this -> hasWheels."<br>";
    
    }
  else
  {
    echo "<br>The Wheels are not present  ".$this -> hasWheels."<br>";
   
  }
  }
}
$ob=new Minicar;

$ob->setmodel('oodi');
$ob->getmodel();
$ob->setHasWheels(4);
$ob->getHasWheels();
$ob1=new Minicar;
$ob1->setmodel('bmw');
$ob1->setHasWheels(0);
$ob1->getmodel();
$ob1->getHasWheels();

?>
