<?php 
// ---------------Equality of 3 value------------



// function EqualIntegers($a, $b, $c) {
//     $count = 1;

//    if($a==$b && $b==$c){
//       $count+=2;
//    }
//    else if ($a == $b || $a== $c) {
//         $count++;
//     }
//   //    else  if ($b == $c) {
//         $count++;
//     }   
//     return $count;
// }




// $a = 5;
// $b = 5;
// $c = 5;

// $output = EqualIntegers($a, $b, $c);
// echo "Output: " . $output;




// --------------------------h4ck3rSpeak-----------------

// function myfunction($inputString) {
//     $outputString = '';

//     for ($i = 0; $i < strlen($inputString); $i++) {
//         $char = $inputString[$i];

//         if ($char == 'a') {
//             $outputString .= '4';
//         } elseif ($char == 'e') {
//             echo "testing";
//             $outputString .= '3';
//         } elseif ($char == 'i') {
//             $outputString .= '1';
//         } elseif ($char == 'o') {
//             $outputString .= '0';
//         } elseif ($char == 's') {
//             $outputString .= '5';
//         } else {
//             $outputString .= $char;
//         }
//     }
//     $outputString[strlen($outputString)-1] = "Z";
//     return $outputString;
// }


// $input = "javascript is cool";
// $output = myfunction($input);

// echo $output; 



// -------------------reverse the order of word---------------\\

// function reverse($word) {
//  for($i=0;$i<strlen($word);$i++){

//     if (strlen($word) > 5) {
//         $reversedWord = '';
//         for ($i = strlen($word); $i > 0; $i--) {
//             $reversedWord .= $word[$i];
//         }
//         return $reversedWord;
//     } else {

//         return $reversedWord .= $word;
//     }

// }
// }


// $originalWord = "Ifgg is coming from ambattur";
// $reversedWord = reverse($originalWord);

// echo "Reversed Word (if more than 5 letters): $reversedWord";

// $colors = array("red", "green", "blue");
// $implodedString = implode(" ", $colors);

// echo $implodedString;  // Output: red, green, blue


// $a = "veena is coming from ambattur";
// $arr = explode(" ", $a);

// for ($i = 0; $i < count($arr); $i++) {

//     if (strlen($arr[$i]) >= 5) {
//         $arr[$i] = strrev($arr[$i]);
//     }
// }

// echo implode(" ", $arr);

// ------------------find the vowel in middle--------------------
// function isVowelSandwich($str) {
  
//     if (strlen($str) === 3) {
  
//         $first = $str[0];
//         $middle = $str[1];
//         $last = $str[2];

  
//         if (isConsonant($first) && isVowel($middle) && isConsonant($last)) {
//             return true; 
//         }
//     }

//     return false; 
// }


// function isVowel($char) {
//     return in_array(strtolower($char), array('a', 'e', 'i', 'o', 'u'));
// }

// function isConsonant($char) {
//     return !isVowel($char);
// }

// $string1 = "was";
// $string2 = "ep";
// $string3 = "air";

// echo "$string1 vowel content in middle and first ,last have consonant word: " . (isVowelSandwich($string1) ? "true" : "false") . "<br>";
// echo "$string2 vowel content in middle and first ,last have consonant word: " . (isVowelSandwich($string2) ? "true" : "false") . "<br>";
// echo "$string3 vowel content in middle and first ,last have consonant word: " . (isVowelSandwich($string3) ? "true" : "false") . "<br>";

// -------------------find the mean of all digits

// $number=mean(12345);
// function mean($output){
//     // echo $output;
//     $val=strval($output);
// //    $length =strlen($output);
// //    echo $length;
// $value=0;

//    for($i=0;$i<strlen($val);$i++){
//        $value += (int)$val[$i];
//    }

//   $value1=$value/strlen($val);

// return $value1;


// }
// echo $number

// $x = -120;

// function reverseNumber($x) {
//     $numberAsString = strval($x);
     
//     // Check if the last digit is zero
//     if ($numberAsString[strlen($numberAsString) - 1] == '0') {
//         // Preserve the trailing zero
//         $reversedNumber = strrev(substr($numberAsString, 0, -1));
//     } else {
//         if ($numberAsString[0] == '-') {
//             $reversedNumber = '-' . strrev(substr($numberAsString, 1));
//         } else {
//             $reversedNumber = strrev($numberAsString);
//         }
//     }

//     echo $reversedNumber;
// }

// reverseNumber($x);


// $x=1;
// $y=&$x;
// $x=3;

// echo $y;


$x = 1;
$y = &$x;
$x = 3;

echo $y;

?>