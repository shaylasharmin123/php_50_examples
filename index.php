<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device- width, initial-scale=1.0">
	<meta name="description" content="änimation">
	<meta name="keywords" content="änimation">
	<meta name="robots" content="index, follow">
	<meta name="language" content="English">
	<meta name="revisit-after" content="7 days">
	<meta name="author" content="Shayla Sharmin">

	<title>php_example</title>

	<!--css links-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">

		
</head>
<body>
	
	<div class="container">
		<?php
		echo "1." . " " . "My first PHP code!" . "<br>";
		echo "2." . " " . "hello world!" . "<br>";
		echo "<h1>3. My first PHP code!</h1>" . "<br>";
		echo "<h1>" . " 4. " . "My first PHP code!" . "</h1>" . "<br>";
		print "hello world!" . "<br>";
		Echo "<h1>" . "Hello world!" . "</h1>" . "<br>";

		//variable 
		$number = 5 ;
		$name = "shayla";
		echo "<h1>" . "Her name is" . " " . $name . "." ."</h1>" . "<br>";
		echo "<h1>" . "his age is" . " " . $number ."</h1>" . "<br>";

		//scope
		$name1 = "sharmin";
		echo "<h1>" . "Her name is" . " " . $name1 . "." ."</h1>" . "<br>";

		//local scope
		function callingName(){
			$name2 = "sharmin";
			echo "<h1>" . "Her name is" . " " . $name2 . "." ."</h1>" . "<br>";
		}
		callingName();

		//local & global scope
		$name3 = "shumi" ;
		function callingName3(){
			global $name3 ;
			echo "<h1>" . "Her name is" . " " . $name3 . "." ."</h1>" . "<br>";
		}
		callingName3();
		var_dump($name3);
		echo "<br>";

		$name4 = "shayla sharmin";
		var_dump($name4);
		echo "<br>";

		$name5 = "shayla           sharmin";
		var_dump($name5);
		echo "<br>";

		//example 15:
		$number1 = 100 ;
		echo $number1 . "<br>";
		var_dump($number1);
		echo "<br>";

		//example 16:
		$number2 = 10.10 ;
		echo $number2 . "<br>";
		var_dump($number2);

		//example 17:
		$number3 = false ;
		echo $number3 . "<br>";
		var_dump($number3);
		echo "<br>";

		//example 18:
		$number4 = true ;
		echo $number4 . "<br>";
		var_dump($number4);
		echo "<br>";

		//example 19:
		$number5 = null ;
		echo $number5 . "<br>";
		var_dump($number5);
		echo "<br>";

		//example 20
		$names = array("shayla" , "sharmin" ,"shumi" , "riddhi");
		echo $names[0] . "<br>" ;
		var_dump($names);
		echo "<br>";

		//example 21
		$names1 = array("shayla" , "sharmin" ,"shumi" , "riddhi" ,100 , 100.01 , true);
		echo $names1[5] . "<br>" ;
		var_dump($names1);
		echo "<br>";

		//example 22
		$data = array("shayla" => 30, "sharmin" =>35,"shumi" =>20 , "riddhi" =>7);
		echo $data['shayla'] . "<br>" ;
		var_dump($data);
		echo "<br>";

		//example 23
		$number6 = 30;
		$number7 = 20;
		$result= $number6 + $number7;
		echo "the result is " . $result . "<br>";

		//example 24
		$number6 = 30;
		$number7 = 20;
		$result= $number6 % $number7;
		echo "the result is " . $result . "<br>";

		//example 25
		$number6 = 370;
		$number7 = 240;
		$result= $number6 * $number7;
		echo "the result is " . $result . "<br>";

		//example 26
		$number6 = 370;
		$number7 = 240;
		$number6 %= $number7;
		echo "the result is " . $number6 . "<br>";

		//example 27
		$x = 10;
		echo ++$x . "<br>";

		//example 28
		$x = 10;
		echo $x++ . "<br>";
		echo $x++ . "<br>";
		
		//example 29
		$number8 = 20;
		$number9 = 20;
		if($number8 == $number9){
			echo "EQUAL" . "<br>";
		}

		//example 30
		$number10 = 30;
		$number11 = 20;
		if($number10 == $number11){
			echo "EQUAL";
		}else{
			echo "not equal" . "<br>";
		}

		//example 31
		$number12 = 30;
		$number13 = 20;
		if($number12 == $number13){
			echo "Equal";
		}elseif($number12 > $number13){
			echo "True" . "<br>";
		}else{
			echo "False";
		}

		//example 32
		$number14 = 30;
		$number15 = 30;
		if($number14 === $number15){
			echo "Identical" . "<br>";
		}else{
			echo "Not Identical";
		}

		//example 33
		$number16 = 30;
		$number17 = "30";
		if($number16 === $number17){
			echo "Identical" . "<br>";
		}else{
			echo "Not Identical" . "<br>";
		}

		//example 34
		$x = "Hello World!";
		echo strtoupper($x) . "<br>";

		//example 35
		$x = "Hello World!";
		echo strtolower($x) . "<br>";

		//example 36
		$x = "Hello Bangladesh!";
		echo str_replace("Bangladesh" , "Dolly" , $x) . "<br>";

		//example 37
		$x = "Hello World!";
		echo strrev($x) . "<br>";

		//example 38
		$x = "     Hello World!       ";
		echo trim($x) . "<br>";

		//example 39
		$x = "Hello World!";
        $y = explode(" ", $x);
        print_r($y);
        echo "<br>";

        //example 40 (Concatenate Strings)
        $x1 = "shayla";
		$y1 = "sharmin";
		$z = $x1 . " " . $y1;
		echo $z . "<br>";

		//example 41
		$x2 = "shayla";
		$y2 = "zaman";
		$z2 = "$x2 $y2";
		echo $z2 . "<br>";

		//example 42 (substr:Start the slice at index 6 and end the slice 5 positions late)
		$x = "Hello World!";
        echo substr($x, 6, 5) . "<br>";

        //example 43
        $gari = array("Volvo", "BMW", "Toyota" , "nano" , "maruti");
		echo count($gari) . "<br>";

		//example 44
		$foods = array("rice", "chicken", "beef"); 
		echo $foods[0] . "<br>";

		//example 45
		$cars = array("Volvo", "BMW", "Toyota", "nano" , "maruti"); 
		$cars[1] = "sujuki";
		var_dump($cars) ;
		echo "<br>";

		//example 46
		$x5 = 775;
		function myCode() {
		  echo $GLOBALS['x5'];
		}
		myCode();
		echo "<br>";

		//example 47
		$txt = "My Country";
		echo "I love $txt!" . "<br>";

		//example 48
		$x3 = 500;
		$y3 = 400;
		echo $x3 + $y3 . "<br>";

		//example 49
		$x4 = 205.78;
		var_dump($x4) . "<br>";

		//example 50
		var_dump(100);
		var_dump("shayla");
		var_dump(3.1416);
		var_dump(true);
		var_dump([2, 3, 56]);
		var_dump(NULL);

		?>
	</div>


	<!--js links-->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>




