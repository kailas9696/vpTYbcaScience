<?php
interface A {
    public function setProperty($x);
    public function description();
    public $a; 
}
class Mangoes implements A {
   public function setProperty($x) {
        $this->x = $x;
    }
    public function description() {
        echo 'Describing  ' . $this->x . "  tree";
  }
}
$Mango = new Mangoes();
$Mango->setProperty("mango");
$Mango->description();
?>