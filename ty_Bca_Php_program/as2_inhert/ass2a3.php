Q..Write a PHP script to demonstrate the introspection for examining class .(use function
et_declared_classes() ,get_class_methods() and get_class_vars()).


 

<?php
class intro
{
 var $i;
 function f1()   
 {

 }
 function f2()    
 {

 }
}
class intro_1 extends intro
{
 var $j,$k;
 function f3()   
 {
 
 }
 function f4()    
 {

 }
}
$ob=new intro_1();
echo class_exists('intro');        
var_dump(get_declared_classes());      
var_dump(get_class_methods('intro_1'));      
var_dump(get_class_methods('Exception'));     
var_dump(get_class_vars('intro_1'));     
var_dump(get_parent_class('intro_1'));      
var_dump(get_object_vars($ob));    
?>

