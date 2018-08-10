<?php
// Define a class
class Myclass
 {
// Declaring three protected varaibles protected $font_size;
 protected $font_color;
 protected $string_value;
// Declarte construct method which accepts three parameters and the method Addition()
 function __construct($font_size,$font_color,$string_value,$a,$b)
 {
 $this->font_size = $font_size;
 $this->font_color = $font_color;
 $this->string_value = $string_value;
 $this->a = $a;
 $this->b = $b;
 
 $this->Addition();
 }
// Declare a method for customize print 
 public function Addition()
 {
 	$this->c = $this->a+$this->b;
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->c."</p>";
 } 
 }
// Define a subclass
class Mysubclass extends Myclass
 {
 // Call the method customize print() and add the text decoration attribute within echo statement
public function Addition()
 {
 	$this->c = $this->a+$this->b;
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";text-decoration:underline;>".$this->c."</p>";
 }
 }
// Create objects and passes parameters
 $p = new Myclass('20px','red','Addition of two nos',1,2);
 $s = new Mysubclass('15px','pink','Addition of two no',3,5);
 // $p->Addition();

?>



