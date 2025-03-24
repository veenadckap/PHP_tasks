<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


//------------------------codeware invert positive to negative------------------------

// $a = [-1, 2, 3, -4, 5];

// $a = invert($a);

// function invert(array $a): array {
//     $new_a = []; 
//     foreach($a as $b) {
//         if ($b > 0) {
//             $new_a[] = -$b;
//         } elseif ($b < 0) {
//             $new_a[] = -$b;
//         } else {
//             $new_a[] = $b; 
//         }
//     }

//     print_r($new_a); 
//     return $new_a; 
// }

//-------------------------codeware odd int----------------------------------
// $a = [1, 1,2];

// echo findIt($a);

// function findIt(array $seq) {
   
//     // $counts = [];
   
//     // foreach($seq as $num){
//     //     if (isset($counts[$num])){
//     //         $counts[$num]++;
//     //     } else {
//     //         $counts[$num] = 1;
//     //     }
//     // }

//     // foreach($counts as $num => $count){
//     //     if ($count % 2 !== 0){
//     //         return $num;
//     //     }
//     // } 

// // logic2
//     $nums = array_count_values($seq);
//     foreach ($nums as $key => $val) {
//       if ($val % 2) {
//         return $key;
//       }
//     }

// }


// $array = array("furits"=>"apple","red"=>"orange","green"=>"blue","yellow"=>"green");
// // $array = array_values($array);
// // print_r($array);
// // echo "<br>";

// unset($array["green"]);
// // print_r($array);
// print_r($array);

//----------------static------------------------------------------------
function myFunction() {
    // Initialize $count as a static variable
    static $count = 0;
    
    // Increment the static variable by 1
    $count++;
    
    // Output the current value of $count
    echo $count;
}

// Call the function multiple times
myFunction();  // Outputs: 1
myFunction();  // Outputs: 2
myFunction();  // Outputs: 3

?>
