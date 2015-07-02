<?php 






	const NAME = "Egor";
	/*
echo "hello world, $name <br>"; 
// коментарий к коду 

$arrayName = array(11, 43, array('test', 'test', 'test' ));
$string = 'hello';
$digital = 123;
var_dump($arrayName, $string, $digital);







for ($i=0; $i < 100 ; $i++) { 
	if ($i%3 == 0) {
		echo "Fizz <br>";
	}
	elseif ($i%4 == 0 ) {
		echo "string";
	}
}





$title = $_GET['title'];
$describtion = $_GET['describtion'];
$category = $_GET['category'];
$price = $_GET['price'];

echo $tite . $describtion . $category . $price; 


function printAge($age) {

		

		if ($age < 20) {
			echo "<p><h1> У вас все впереди " . $name . "!</h1>";
		} elseif ($age >= 20 and $age < 30) {
			echo "<p><h1> время взяться за ум " . $name . "!</h1>";
		}	elseif ($age > 30)  {
			echo "<p><h1> есть чему поучиться " . $name . "!</h1>";
		}

}



for ($age = 21; $age < 45; $age++) { 
	printAge($age);
}



$page = $_GET["page"];
$contact = $_GET["main"]

if ($page) {
	require_once "footer.php";
} elseif ($contact) {
	require_once "header.php";
}


$firstTaste = array(

	'category' => "ice-cream",
	"taste" => "chery" 

	);

$secondTaste = array(

	'category' => 'ice-cream',
	'taste' => 'chocolate' 

	);

$products = array ( $secondTaste, $firstTaste);

var_dump($products);
*/






// echo "string";
// $form = $_GET["form"];
// $message = $_GET["message"]

// $name = $_GET["name"];

// $message = "";
// if (isset($_GET['name'])) {
// 	$message = $message .
// }

// if ($form) {
// 	require_once "footer.php";
// } elseif ($message) {
// 	require_once "header.php";
// } 

// function get_domein() {
// 	$mail = $_GET["mail"];
// 	$pos = strpos($mail, "@");
// 	$rest = substr($mail, $pos + 1);
// 	echo $rest; 
// }

// //get_domein();



// function count_word()  {

// $string	= "Первое второе слово";
// $arr = explode(" ", $string);

// $result = count($arr);

// echo $result;

// }

// count_word();

// $hipstor = fopen('hipster.txt', 'r');

// $lines = file('', file("hipster.txt"));

// foreach ($lines as $line_num => $line) { 
//     echo "ghgh";
// } 





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
	.header {
		background-color: #55ACEE;
		height: 76px;
		margin-top: -10px;
		width: 100%;
	}

	.header__main-text {
		text-align: center;
		padding-top: 16px;
		color: white;
	}

	h1 {
		font-size: 31px;
		line-height: 0px;
	}

	body {
		font-family: 'Open Sans';
	}

	.form-section {
		text-align: center;

	}

	textarea {
		margin-top: 28px;
		border: 2px solid rgb(85, 172, 238);
		margin-left: 0px;
		margin-right: 0px;
		width: 439px;
	}

	input {
		margin-top: 33px;
	}

</style>
</head>
<body>
	



<div class="header">
	<div class="header__main-text"><h1>Блог 1.1.</h1></div>
</div>

<div class="form-section">
	<form method="post" action="index.php">
	<textarea name="text" id="" cols="30" rows="10"></textarea><br>
	<input class="btn btn-info" type="submit" value="Отправить">
	</form>
</div>



<?php  

$text_holder = 'hipster.txt'; 

$text = $_POST['text'];
echo $text;
$current = file_get_contents($text_holder);
$current .= $text;
file_put_contents($text_holder, $current);

echo $current;


?>

</body>
</html>




