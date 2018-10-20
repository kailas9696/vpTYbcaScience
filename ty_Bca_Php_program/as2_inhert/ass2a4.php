Q...Write PHP script to demonstrate the concept of introspection for examining object.



<?php
class introspection
{
  var $i;
  function f1()
 {

  }
  function f2()
  {
  
   }
}
class introspection1 extends introspection
{
  var $j,$k;
  function f3()
 {

  }
  function f4()
  { 

   } 
}
$ob=new introspection1();
if(is_object($ob))     
{
  echo get_class($ob);       
}
if(method_exists($ob,'f4'))     
{
  echo "method f4 exists";
}
var_dump(get_object_vars($ob));   
?>
