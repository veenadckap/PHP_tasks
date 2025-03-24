<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// ---------------------------------------------------triangle-pattern----------------------------------------------------------------------------
// for($i=0;$i<=5;$i++){
//     for($j=$i;$j>=1;$j--){
//         echo " * ";
//     }
//     echo "<br>";
// }
//--------------------square pattern----------------------------------------------------------------------------

// $size = 5;
// for ($i = 0; $i < $size; $i++) {
//     for ($j = 0; $j < $size; $j++) {
//         echo "* ";
//     }
//     echo "<br>";
// }

//-----------------------------triangle patterns---------------------------------
// $rows = 5;
// for ($i = 1; $i <= $rows; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "* ";
//     }
//     echo "<br>";
// }

//------------------------------------------------------------------------------------------------
// $n=3;

// for($i=1;$i<=$n;$i++){

// for ($j=$i; $j <=$i ; $j++) {

//     if($i==$j){
//         echo "* ";
//     }
//     echo "<br>";
// }
// }
//----------------------------------------------------------------------------------------
// $str="is2 Thi1s T4esT 3a";
// if($str == " "){
//     echo"string is empty ";
// }
// else{

//   $strtoarray=explode(" ",$str);
// //   print_r($strtoarray);

//   $arrays=array();

//   $new=array_pop($strtoarray);
//   $str1=(string)$new;
// //   echo$str1;

//   for($i=0;$i<strlen($str1);$i++){
//     if($str1[$i]==3){
//         $arrays[3]=$str1;
//     }
//   }

//     $new1=array_pop($strtoarray);
//   $str2=(string)$new1;
// //   echo$str1;

//   for($i=0;$i<strlen($str2);$i++){
//     if($str2[$i]==4){
//         $arrays[4]=$str2;
//     }
//   }

//   $new2=array_pop($strtoarray);
//   $str3=(string)$new2;
// //   echo$str1;

//   for($i=0;$i<strlen($str3);$i++){
//     if($str3[$i]==1){
//         $arrays[1]=$str3;
//     }
//   }

//   $new3=array_pop($strtoarray);
//   $str4=(string)$new3;
// //   echo$str1;

//   for($i=0;$i<strlen($str4);$i++){
//     if($str4[$i]==2){
//         $arrays[2]=$str4;
//     }
//   }
// ksort($arrays);
// print_r($arrays);
// }

//  $str = "is2 Thi1s T4esT 3a";
// order($str);
// function order($words){
// if(empty($words)){
//     echo "string is empty";
// } else {
//     $strToArray = explode(" ", $words);
//     $arrays = array();

//     foreach ($strToArray as $word) {
//         $number = '';
//         $wordChars = str_split($word);
//         foreach ($wordChars as $char) {
//             if (is_numeric($char)) {
//                 $number .= $char;
//             }
//         }
//         $arrays[$number] = $word;
//     }

//     ksort($arrays);

//     print_r($arrays);
// }

//  }




// function binary($Num) {
//     $str=implode("",$Num);
// 	$decNum = 0;
// 	$len = strlen($str);

// 	for ($i = 0; $i < $len; $i++) {

// 		$decNum += $str[$i] * pow(2, $len - $i - 1);

// 	}

// 	return $decNum;
// }

// $Num = [1,1,1,1];


// $dec = binary($Num);

// echo "Decimal Number: " . $dec;


//function arrayDiff($a, $b) {
//    print_r($a);
//    echo "<br>";
//    print_r($b);
//
//
//   foreach($a as $first){
//    $wordChars = str_split($first);
//    print_r($wordChars);
//    foreach($b as $second){
//       $wordChars = str_split($second);
//
//    }
//   }
//
//
//
//
//
//}
//$a=[1,2];
//$b=[1];
//arrayDiff($a,$b)
//-------------------------------------------------------------------------------------------

// $nums1 = [1, 2, 3, 0, 0, 0];
// $m = 3;
// $nums2 = [2, 5, 6];
// $n = 3;


// function merge(&$nums1, $m, $nums2, $n)
// {

//     $newArray = array_merge($nums1, $nums2);

//     print_r($newArray);
//     $sort = [];
//     foreach ($newArray as $array) {
//         if ($array != 0) {
//             $sort[] = $array;
//         }
//     }
//     echo "<br>";
//     print_r($sort);


//     $length = count($sort);


//     for ($i = 0; $i < $length - 1; $i++) {
//         for ($j = 0; $j < $length - $i - 1; $j++) {

//             if ($sort[$j] > $sort[$j + 1]) {

//                 $temp = $sort[$j];
//                 $sort[$j] = $sort[$j + 1];
//                 $sort[$j + 1] = $temp;
//             }
//         }
//     }

//     return $sort;
// }




// print_r(merge($nums1, $m, $nums2, $n));
//-------------------------reverse pyramid-----------------------------------------------------------------------------------

//echo "<pre>";
//$n = 7;
//
//for ($i = $n; $i > 0; $i--) {
//    for ($j = 0; $j < $n + $i - 1; $j++) {
//        if ($j < $n - $i) {
//            echo "&nbsp;&nbsp;";
//        } else {
//            echo "&nbsp;*";
//        }
//    }
//    echo "<br>";
//}
//echo "</pre>";
//

//
//echo "<pre>";
//$n = 5; // You can change this value to any positive integer
//
//for ($i = 0; $i < $n; $i++) {
//    for ($j = 0; $j < 2 * $n - 1; $j++) {
//        if ($j < $i || $j >= 2 * $n - 1 - $i) {
//            echo "&nbsp;&nbsp;";
//        } else {
//            echo "&nbsp;*";
//        }
//    }
//    echo "<br>";
//}
//echo "</pre>";

//function onePlue($digits)
//{
//    $a = '';
//    foreach ($digits as $x) {
//        $a .= $x;
//    }
//    $str = (int)$a + 1;
//    $str = (string)$str;
//
//
//    $array = array_map('intval', str_split($str));
//
//    return $array;
//}

// function onePlus($digits)
// {

//     $numberStr = implode('', $digits);


//     $resultStr = (string)((int)$numberStr + 1);


//     $resultArray = array_map('intval', str_split($resultStr));

//     return $resultArray;
// }
// $a = [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6];
// print_r(onePlus($a));

// function plusOne($digits) {
//     $n = count($digits);


//     for ($i = $n - 1; $i >= 0; $i--) {

//         if ($digits[$i] < 9) {
//             $digits[$i]++;
//             return $digits;
//         }


//         $digits[$i] = 0;
//     }

//       array_unshift($digits, 1);

//     return $digits;
// }

// $digits = [1, 2, 3];
// $result = plusOne($digits);
// print_r($result);

// ---------------------1. Right-Angled Triangle------------------------
// $rows = 5;

// for($i = 1; $i <= $rows; $i++) {
//     for($j = 1; $j <= $i; $j++) {
//         echo "* ";
//     }
//     echo "<br>";
// }

//-------------------------------Inverted Right-Angled Triangle---------------------------------
//$rows = 5;
//
//for($i = $rows; $i >= 1; $i--) {
//    for($j = 1; $j <= $i; $j++) {
//        echo "* ";
//    }
//    echo "<br>";
//}
//
//$rows = 2;
//
////function generatePascalsTriangle($rows) {
//    $triangle = [];
//
//    for ($i = 0; $i < $rows; $i++) {
//        $triangle[$i] = [];
//        $triangle[$i][0] = 1;
//
//        for ($j = 1; $j < $i; $j++) {
//            $triangle[$i][$j] = $triangle[$i - 1][$j - 1] + $triangle[$i - 1][$j];
//        }
//
//        $triangle[$i][$i] = 1;
//    }
//
//
//
//
//echo "<pre>";
//print_r($triangle);
//echo "</pre>";
//}


$rows = 3;

    $triangle = [];

    for ($i = 0; $i < $rows; $i++) {
        $triangle[$i] = [];
        $triangle[$i][0] = 1;

        for ($j = 1; $j < $i; $j++) {
            $triangle[$i][$j] = $triangle[$i - 1][$j - 1] + $triangle[$i - 1][$j];
        }

        $triangle[$i][$i] = 1;
    }

echo "<pre>";
print_r($triangle[$rows-1]);
echo "</pre>";

function getRow($rowIndex) {
    $row = [1];
    for ($i = 1; $i <= $rowIndex; $i++) {
        $newRow = [];
        $newRow[0] = 1;
        for ($j = 1; $j < $i; $j++) {
            $newRow[$j] = $row[$j - 1] + $row[$j];
        }
        $newRow[$i] = 1;
        $row = $newRow;
    }

    return $row;
}

$rowIndex = 4;
$pascalsRow = getRow($rowIndex);

print_r($pascalsRow);


