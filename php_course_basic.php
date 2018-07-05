<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP!</title>
</head>

<body>
    <?php

    // // ARRAYS AND ASSOCIATIVE ARRAYS
    // $numberList = ["age" => 56,64,56,"cool beans"];
    // // Associative Arrays uses a 'key' to change the index and inputing a value
    // $names = ["first_name" => "Edwin", "last_name" => "Diaz"];
    // echo $names["first_name"] . " " . $names["last_name"] . " " . $numberList["age"];
    
    // IF STATEMENTS USING SWITCH
    // $num = 4;
    // // Test $num against multiple values
    // switch($num){
    //     case 34:
    //     echo "is it 34?";
    //     case 50:
    //     echo "is it 50?";
    //     case 43:
    //     echo "you got the right one!";
    //     break;
    //     case 50:
    //     echo "is it 50?";
    //     case 50:
    //     echo "is it 50?";
    //     default:
    //     echo "we couldn't find anything :(";
    // }

        /////////////////////////////////////////////////////////
    // // WHILE LOOPS
    // $i = 0;
    // while($i < 10){
    //     $i++;
    //     echo "what the hell?<br>";
    // }

    /////////////////////////////////////////////////////////
    // // FOR LOOPS
    // for ($i = 0; $i < 50; $i++){
    //     echo "You are an idiot<br>";
    // }

    /////////////////////////////////////////////////////////
    // // FOR..EACH LOOP
    // $numbers = [356, 345, 23, 35];

    // foreach($numbers as $number){
    //     echo $number . "<br>";


    // }

    // if (5 < 10) {
    //     echo "you suck and you are dumb";
    // } elseif ( 6 > 5) {
    //     echo "you also suck and are kindof dumb";
    // } elseif ( 3 < 6) {
    //     echo "you finally got it!";
    // } else {
    //     echo "huh?";
    // }

    // for ($i = 0; $i <= 10; $i++){
    //     echo "$i<br>";
    // }

    // $var = 50;

    // switch ($var){
    //     case 40:
    //     echo "this is not it";
    //     case 50:
    //     echo "this is not it";
    //     break;
    //     case 35:
    //     echo "this is not it";
    //     break;
    //     case 60:
    //     echo "this is it!";
        
    // }

    /////////////////////////////////////////////////////////
    // FUNCTIONS!

    // init();

    // function init(){
    //     say();
    //     echo "<br>";
    //     calculate();
    // }

    // function calculate() {
    //     echo 456 + 345;
    // }

    // function say (){
    //     echo "Hello, do you like the class?";
    // }

    // FUNCTION PARAMETERS
    //  function greeting($message){
    //     echo $message;

    //  }

    //  greeting("Hello Student");

    // function calculate($number1, $number2){

    //     echo $number1 * $number2;


    // }
    // calculate(5, 6);

    /////////////////////////////////////////////////////////
    // RETURN VALUES OF FUNCTIONS
    //     function addNumbers($number1, $number2) {
    //     $sum = $number1 + $number2;
    //     return $sum;
    // }

    // $x = "outside";

    // function convert() {
    //     global $x;
    //     $x = "inside";
    // }

    // echo $x;
    // echo "<br>";
    // convert();
    // echo $x;

    /////////////////////////////////////////////////////////
    // CONSTANTS
        // $number = 10;
        // echo $number . "<br>";

        // define("name", 1000);
        // echo name;

    /////////////////////////////////////////////////////////
    // PRACTICE SECTION 4
    // function calc($x, $y){
    //     $value = $x + $y;
    //     return $value;
    // }
    // $add = calc(3, 4);
    // echo $add;

    /////////////////////////////////////////////////////////
    // PRE-DEFINED MATH FUNCTIONS
    // echo pow(2, 7);
    // echo "<br>";

    // echo rand(1, 20);
    // echo "<br>";

    // echo sqrt(100);
    // echo "<br>";

    // echo ceil(4.6);
    // echo "<br>";

    // echo floor(4.8);
    // echo "<br>";

    /////////////////////////////////////////////////////////
    // STRING FUNCTIONS
    // $string = "Hello World";
    // echo strlen($string);
    // echo "<br>";

    // echo strtoupper($string);
    // echo "<br>";

    // echo strtolower($string);
    // echo "<br>";

    /////////////////////////////////////////////////////////
    // ARRAY FUNCTIONS
    // $list = [343, 34, 43, 56, 35];

    // echo max($list);
    // echo "<br>";
    // sort($list);
    // print_r($list);
    // echo "<br>";

    /////////////////////////////////////////////////////////
    // PRACTICE SECTION 5
    // echo rand(3, 40);
    // echo "<br>";

    // $string = "Hello World";
    // echo str_shuffle($string);
    // echo "<br>";

    // $num = [45, 465, 46, 46];
    // echo max($num);


?>

</body>

</html>