<?php   
class Myclass
{
 public $volume = 1;	
 public $font_size ="18px";
 public $font_color = "blue";
 public $string_name = "w3resource";
 public function customize_print()
 {
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->volume.$this->string_name."</p>";
 }
}
$f = new MyClass;
echo $f->customize_print();
?>
