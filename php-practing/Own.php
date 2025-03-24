<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//-------------------define--------------

// define("FirstName",1);
// if(FirstName == 0){
//     echo FirstName ." " . "2" . "<br>";
// }
// else{
//     echo "2" . FirstName . "<br>";
// }

// --------------predefined Constants---------------------------

// echo PHP_VERSION . "<br>";/* it show version of the php in string datatype */
// echo __FILE__ . "<br>"; /* it show  file path   */
// echo PHP_MAJOR_VERSION . "<br>"; /* it also find the version of the php in int datatype */
// echo __LINE__;    /* this predefined function it found which line is echo  */

//------------------Variable variables------------------------

//  $new1="value1"; /* it assign the value for new1*/

//  $$new1="value2"; /* it assign a value not for new1 it means above line store value to $new1 this what we have done
//  means we using two dollor sign $$new1 how it assign above i mentioned $new1="value1" what $new1 hold value
//  this $$ sings take what value hold in $new1 that value assign a variable for value2
//  */


// echo $new1 . "<br>" . $value1 . "<br>" ;

//--------------------------declare--------------------------------------
// declare(strict_types=1);   /*it like "use strict" in js */

// function sum(int $x ,int $y){
//     return $x+ $y;
// }

// $sum=sum(2,3);

// echo $sum;
// -----------------------heredoc-(double quote action)---------------------------------------------------
// $name=<<<HI
// line 1
// line 2
// line 3
// HI;

// echo nl2br($name);
// echo $name;

// $x=0;
// $message = <<<EOT
// This is a multi-line
// message $x.
// EOT;
// echo nl2br($message);
// --------------------------------nowdoc-(single quote action)--------------------------------------------------
// $x=2;

// $name=<<<'HI'
// line 1
// line 2 $x
// line 3
// HI;

// echo nl2br($name);
// echo $name;

//---------------------------------array-handling-----------------------------------------------------
// $programmming=[
//    'php' => [

//         'php1' => 'php3',
//         'php2' => 'php4',
//         'php3' => 'php5',
//         'php4' => [
//             ['html'=> 'css' , 'css' => 'tailwindcss'],
//             ['html'=> 'js' , 'js' => 'react js']
//         ]
//    ],
//    'html' => 'hyper text mark language'
// ];

// print_r($programmming['php']['php4'][0]['html']);
//print("Hello, World!,hello");
//---------------------------------------------$_SERVER---------------------------------------------------
// echo "<pre>";
// print_r($_SERVER );
// echo "<pre>";
//------------------------------------------getenv()-----------------------------------------------------
// $name="vena";
// $n="veena";
// echo "welcome $name  $n";
// echo "<pre>";
// print_r(getenv())
//--------------------------------------------fdiv--------------------------------------------------
// var_dump((fdiv(5.7, 1.3))); // float(4.384615384615385)
// var_dump(fdiv(4, 2)); // float(2)
// var_dump(fdiv(1.0, 0.0)); 
// var_dump(fdiv(-1.0, 0.0)); // float(-INF)
// var_dump(fdiv(0.0, 0.0)); // float(NAN)
//-------------------------------------match--------------------------------
//------match function act like strict equal-and process is switch statment
// $food = "1";

// $return_value = match($food) {
//     1 => 'This food is an apple',
//     2 => 'This food is a bar',
//     3 => 'This food is a cake',
//     default => 'This food is a default'
// };

// var_dump($return_value);
//-------------------------- buffering---------------------------------------------------
// Start output buffering
// Generate some output

// ob_start();
// Retrieve and clean the output buffer
// echo "This is some another output.";
// echo "This is some output.";
// $output = ob_get_clean();

// Now $output contains "This is some output."
// echo $output;

//----------------------function-------------------------------

// function foo(): mixed {
//  return "string";
// }
// var_dump(foo())
//----------------get type variable--------------------------------
// $new=[];
// echo gettype($new);
//---------------------------Date and time---------------------------------------------
// echo time() . "<br>" ;

// $currentTimestamp = time();
// $formattedTime = date("Y-m-d H:i:s", $currentTimestamp);
// echo "Current date and time: " . $formattedTime;

//echo date('tomorrow');
// echo date('m/d/y g:ia', mktime(12, 0, 0,6,21,null));
//----------------------Arrays---------------------------------------------------
    //-------------------------array_chuck---------------------------

// $items =['a' => 3, 'c' => 4, 'e' => 5];
// echo "<pre>";
// print_r(array_chunk($items,true));
// echo "<pre>";
    //----------------------------array_combine------------------------------
// $items =['a' , 'c' , 'e'];
// $items1 =[ 3, 4, 5];
// echo "<pre>";
// print_r(array_combine($items,$items1));
// echo "<pre>";
  //----------------------------------array filter----------------------------------------------------------- 
$array =['a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,'f'=>6,'g'=>7];
$even = array_filter($array,fn($number, $key)=>$number % 2 == 0;
print_r($even);