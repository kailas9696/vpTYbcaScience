<?php
class TV {
	public $model="xyz";
	public $volume = 1;
	public $a = 2;
	public $c;


	function volumeUp(){
	    return $this->volume++;
	}
	function volumeDown(){
		$this->c = $this->volume+$this->a;
		return $this->c;

	}
}

$tv_one = new TV;
$tv_two = new Tv;

$tv_one->volumeUp();
$tv_two->volumeDown();
//echo $tv_one->volume;
 echo $tv_two->c;

?>

