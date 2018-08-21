<?php
/* 1. Write a PHP  program to create a class article having articleid,  name, articleqty, price. Write menu driven program to perform following functions :( Use array of objects) i. Display details of all articles purchased. ii. Display details of articles whose price exceeds 500 iii. Display details of articles whose quantity exceeds 50 
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>menu driven program</title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
</head>
<body>
<form method="post" action="<?php echo($_SERVER['PHP_SELF']); ?> ">
	<h1><p style="font-size: 30px; color: red" >Please Select Option To Perform Following Action  :</p> </h1>
	<h3><input type="radio" name="a" value="a"> i. Display details of all articles purchased.<br>
	</h3><h3><input type="radio" name="a" value="b"> ii. Display details of articles whose price exceeds 500 <br>
	</h3><h3><input type="radio" name="a" value="c">iii. Display details of articles whose quantity exceeds 50<br>
    <input type="submit" name="submit" value="submit"> 
</form>
</body>
</html>

<?php	
class Article{
	public $aid,$a_name,$quantity,$price;
    
	function __construct($aid,$a_name,$quantity,$price){
		$this->aid=$aid;
		$this->a_name=$a_name;
		$this->quantity=$quantity;
		$this->price=$price;
//		echo $_POST['a'];

	}
	public function details_of_Articles($a){
		foreach ($a as $key => $value) {
            echo "<br><p style = font-size:20; > Details of Articles are  :<br><p>";//print_r($a[$key]);echo "<br>";
            echo " article no : $value->aid ; Article Name : $value->a_name ;<br> Article Quantity : $value->quantity ;<br> Article Price : $value->price";
        }
	}
	public function price_exceeds_500($a){
		foreach ($a as $key => $value) {
			if($value->price > 500){
	            echo "<br><p style = font-size:20; > Price Exceeds 500 is :<br><p>";//print_r($a[$key]);echo "<br>";
	            echo " article no : $value->aid ; Article Name : $value->a_name ;<br> Article Quantity : $value->quantity ;<br> Article Price : $value->price";
            }
        }	
	}
	public function quantity_exceeds_50($a){
		foreach ($a as $key => $value) {
			if($value->quantity > 50){ echo "$value->quantity";
			//print_r($a[$key]);
					echo "<br><p style = font-size:20; > Quantity Exceeds 50 is :<br><p>";
	                echo " article no : $value->aid ; Article Name : $value->a_name ;<br> Article Quantity : $value->quantity ;<br> Article Price : $value->price";
            }
        }
        
	}
}

if (isset($_POST['a'])){ 
	$choice = $_POST['a'];
	$ob=new Article(1,"Nagesh",8,900);
	$ob1=new Article(1,"XYZ",58,800);
	$a=[$ob,$ob1];
	//print_r($a);
    
    switch ($choice) {
    	case 'a':
	        $ob->details_of_Articles($a);
    		break;
    	case 'b':
	        $ob->price_exceeds_500($a);
    		break;
    	
    	case 'c':
    		$ob->quantity_exceeds_50($a);
    		break;
    }
	// $ob->calculate_gross();
	// $ob->calculate_deductions();


}
?>
